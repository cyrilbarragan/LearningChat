<?php

namespace Learning\CoreBundle\Utils;

class VideoExtractor
{
    // seconds
    const CLIP_DURATION = 600;
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
                    $matchingVideo;
                    foreach ($this->getPossiblesVideosForItem($item, $date) as $video) {
                        if ($item['time'] >= $video['time']) {
                            $matchingVideo = $video['filename'];
                        }
                    }

                    if (empty($matchingVideo)) {
                        $this->logError(sprintf("Aucune video trouvée pour Badge : %s, Cam : %s, Bal : %s, Time : %s"));
                    } else {
                        $this->processVideo($video['filename'], $item['time'], $video['time']);
                    }
                }
            }
        }
    }

    public function clipsPath($filename)
    {
        return self::VIDEO_CLIPPED_PATH . "/" . basename($filename);
    }

    public function processVideo($videoFilename, $timeStart, $videoTimeStart)
    {
        $destFilename = self::VIDEO_CLIPPED_PATH . "/" . str_replace(':', '', $timeStart) . '_' .  basename($videoFilename);

        if (!preg_match('/^(\d{2})(\d{2})(\d{2})$/', $videoTimeStart, $matches)) {
            $this->logError("Heure de départ vidéo incorrecte : $videoTimeStart");
        }

        $videoTimeStart = ($matches[1] * 3600) + ($matches[2] * 60) + $matches[3];

        if (!preg_match('/^(\d{2}):(\d{2}):(\d{2})$/', $timeStart, $matches)) {
            $this->logError("Heure incorrecte : $timeStart");
        }

        $timeStart = ($matches[1] * 3600) + ($matches[2] * 60) + $matches[3];
        $timeStart = ($timeStart - $videoTimeStart);

        $cmd = "avconv -ss $timeStart -i $videoFilename -t ".self::CLIP_DURATION." -c copy $destFilename";
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

        $pattern = sprintf("/^bal%02d-%04d-%s_%s(\d{6}).mp4$/", $item['bal'], $shortDate, $item['cam'], $longDate);

        $directoryIterator = new \RecursiveDirectoryIterator(self::VIDEO_PATH);
        $iterator = new \RecursiveIteratorIterator($directoryIterator);

        $videos = array();
        foreach ($iterator as $name => $object) {
            $filename = $object->getFilename();

            if (preg_match($pattern, $filename, $matches)) {
                $videos[] = array('filename' => $object->getRealPath(), 'time' => $matches[1]);
            }
        }

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