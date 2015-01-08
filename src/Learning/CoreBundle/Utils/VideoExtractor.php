<?php

namespace Learning\CoreBundle\Utils;

use Symfony\Component\Filesystem\Filesystem;

class VideoExtractor
{
    // seconds
    const CLIP_DURATION = '00:10:00';
    //const VIDEO_PATH = '../ftp/learning';
    const VIDEO_PATH = 'web/videos';
    const VIDEO_CLIPPED_PATH = 'web/videosclipped';

    protected $dry = false;
    protected $commandes = array();
    protected $ffmpeg;
    protected $tree;
    protected $log = array('errors' => array(), 'info' => array());

    public function __construct($ffmpeg, $tree)
    {
        $this->ffmpeg = $ffmpeg;
        $this->tree = $tree;
    }

    protected function logError($msg)
    {
        $this->log['errors'][] = $msg;
    }

    public function process($dry = false)
    {
        $this->dry = $dry;

        foreach ($this->tree->getTree() as $date => $boxes) {
            foreach ($boxes as $boxId => $items) {
                foreach ($items as $item) {
                    $matchingVideo = null;
                    foreach ($this->getPossiblesVideosForItem($item, $date) as $video) {
                        if ($this->convertToSeconds($item['time']) >= $this->convertToSeconds($video['time'], true)) {
                            $matchingVideo = $video;
                        }
                    }

                    if (empty($matchingVideo)) {
                        $this->logError(sprintf("Aucune video trouvée pour Date : $date, Badge : %s, Bal : %s, Time : %s", $item['badge'], /*$item['cam'], */$item['bal'], $item['time']));
                    } else {
                        $this->processVideo($matchingVideo['filename'], $item['time'], $matchingVideo['time'], $matchingVideo['serie']);
                    }
                }
            }
        }
    }

    public function convertToSeconds($time, $video = false)
    {
        $pattern = '/^(\d{2}):(\d{2}):(\d{2})$/';
        if ($video) {
            $pattern = '/^(\d{2})(\d{2})(\d{2})$/';
        }
        if (!preg_match($pattern, $time, $matches)) {
            $this->logError("Heure incorrecte : $time");
        }
        return ($matches[1] * 3600) + ($matches[2] * 60) + $matches[3];
    }

    public function convertToHis($time)
    {
        return gmdate("H:i:s", $time);
    }

    public function processVideo($videoFilename, $timeStart, $videoTimeStart, $serie)
    {
        $destFilename = self::VIDEO_CLIPPED_PATH . "/" . $serie . "/". str_replace(':', '', $timeStart) . '_' .  basename($videoFilename);

        $dir = dirname($destFilename);

        if (!is_dir($dir)) {
            $fs = new Filesystem();
            $fs->mkdir($dir);
        }

        $videoTimeStart = $this->convertToSeconds($videoTimeStart, true);
        $timeStart = $this->convertToSeconds($timeStart);
        $timeStart = ($timeStart - $videoTimeStart);
        $timeStart = $this->convertToHis($timeStart);

        $cmd = "avconv -i \"$videoFilename\" -ss $timeStart -t ".self::CLIP_DURATION." -c copy $destFilename";
        $this->commandes[] = $cmd;

        if (!$this->dry) {
            exec($cmd, $output, $return);
        } else {
            return;
        }

        if (!$return) {
            $this->logInfo("$destFilename créé");
        } else {
            $this->logError("La commande a échoué : \n$cmd");
        }
    }

    public function getCommandes()
    {
        return $this->commandes;
    }

    public function getPossiblesVideosForItem($item, $date)
    {
        $timestamp = strtotime($date);
        $shortDate = date('dm', $timestamp);
        $longDate = date('Ymd', $timestamp);

        $itemSeconds = $this->convertToSeconds($item['time']);

        $dir = self::VIDEO_PATH;

        if (!is_dir($dir)) {
            throw new \Exception("Le dossier $dir n'existe pas");
        }

        $pattern = sprintf("/^bal%02d-%04d-ch\d{2}_%s(\d{6}).mp4$/", $item['bal'], $shortDate, $longDate);
        $pattern2 = sprintf("/^ch\d{2}_%s(\d{6}).mp4$/", $longDate);

        $directoryIterator = new \RecursiveDirectoryIterator($dir);
        $iterator = new \RecursiveIteratorIterator($directoryIterator);

        $videos = array();
        foreach ($iterator as $name => $object) {
            var_dump($object->getRealPath());

            $filename = $object->getFilename();

            if (preg_match('/s(e|\?)rie(\d+)/', $object->getRealPath(), $matches)) {

                $serie = sprintf('%02d', $matches[2]);

                if (preg_match($pattern, $filename, $matches) || preg_match($pattern2, $filename, $matches)) {
                    $videoSeconds = $this->convertToSeconds($matches[1], true);

                    if ($itemSeconds >= $videoSeconds) {
                        $videos[$videoSeconds] = array('serie' => $serie, 'filename' => $object->getRealPath(), 'time' => $matches[1]);
                    }
                }
            }
        }

        var_dump($videos);

        ksort($videos);

        if (empty($videos)) {
            $this->logError("Aucune vidéo de correspond à ce pattern $pattern");
        }
        return $videos;
    }

    public function getVideo($item)
    {
        return $this->extractData($item);
        var_dump($item);
        die('stop');
    }

    public function extractData($filename)
    {
        if (preg_match('/^bal(\d{2})-\d{4}-ch\d{2}_(\d{14})/', $filename, $matches)) {
            $bal = (int) $matches[1];
            $date = date('Y-m-d', strtotime($matches[2]));
            $hour = substr($matches[2], 8);

            return array('bal' => $bal, 'date' => $date, 'hour' => $hour);
        } else {
            $this->logError("Nom de fichier non conforme : $filename");
        }
    }

    protected function formatDate($date)
    {
        $year = substr(date('y'), 1, 2);
        return sprintf("%04d%d", date('d'), date('m'), $year);
    }

    public function getErrors()
    {
        return $this->log['errors'];
    }

    public function getInfos()
    {
        return $this->log['info'];
    }

    public function logInfo($msg)
    {
        $this->log['info'][] = $msg;
    }
}
