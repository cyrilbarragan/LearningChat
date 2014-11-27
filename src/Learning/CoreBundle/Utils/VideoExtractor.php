<?php

namespace Learning\CoreBundle\Utils;

class VideoExtractor
{
    // seconds
    const CLIP_DURATION = 600;

    protected $ffmpeg;
    protected $tree;

    public function __construct($ffmpeg, $tree)
    {
        $this->ffmpeg = $ffmpeg;
        $this->tree = $tree;
    }

    protected function logError($msg)
    {
        var_dump($msg);
        die('stop');
    }

    public function process()
    {
        foreach ($this->getVideos() as $videoFilename) {
            $data = $this->extractData($videoFilename);

var_dump($data);
var_dump($this->tree->getTimesForEntry($data['bal'], $data['date'], $data['hour']));
die('stop');
            if ($times = $this->tree->getTimesForEntry($data['bal'], $data['date'], $data['hour'])) {

            } else {
                $this->logError("$videoFilename ne correspond à aucune donnée de l'arbre");
            }
        }
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

    public function getVideos()
    {
        $directoryIterator = new \RecursiveDirectoryIterator('../web/videos');
        $iterator = new \RecursiveIteratorIterator($directoryIterator);

        $result = array();
        foreach ($iterator as $name => $object) {
            if ("mp4" === $object->getExtension()) {
                $result[] = $object->getFilename();
            }
        }
        return $result;
    }

    protected function resolveVideoName($date, $box, $item)
    {
        $filename = sprintf("bal%s_%s_ch%s_", $item['bal'], $this->formatDate($date));
        var_dump($filename);
        die('stop');
        var_dump($date, $box, $item);
        die('stop');
    }

    protected function formatDate($date)
    {
        $year = substr(date('y'), 1, 2);
        return sprintf("%04d%d", date('d'), date('m'), $year);
    }
}