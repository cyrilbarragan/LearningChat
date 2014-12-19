<?php

namespace Learning\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Learning\CoreBundle\Utils\CatTree;
use Symfony\Component\Finder\Finder;
use Symfony\Bundle\TwigBundle\Extension\AssetsExtension;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

$fs = new Filesystem();

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        $dir = $this->get('kernel')->getRootDir().'/../web/videosclipped';

        if (!is_dir($dir)) {
            $fs = new Filesystem();
            $fs->mkdir($dir);
        }

        $series = array();
        foreach (new \DirectoryIterator($dir) as $fileInfo) {
            $serie = $fileInfo->getBasename();
            if ($fileInfo->isDir() && !$fileInfo->isDot() && preg_match('/^\d{2}$/', $serie)) {
                $series[$serie] = $serie;
            }
        }
        ksort($series);
        return array('series' => $series);
    }

    /**
     * @Route("/list/{serie}", name="list")
     * @Template()
     */
    public function listAction($serie)
    {
        $dir = $this->get('kernel')->getRootDir().'/../web/videosclipped/'.$serie;

        if (!is_dir($dir)) {
            throw $this->createHttpNotFoundException("Le dossier $dir n'existe pas");
        }

        return array(
            'serie' => $serie,
            'videos_by_bal' => $this->getVideos($dir)
        );
    }

    private function getVideos($dir)
    {
        $finder = new Finder();
        $finder->files()->name('*.mp4')->in($dir);

        $videos = array();
        foreach ($finder as $video) {
            $filename = $video->getBasename();
            $path = $video->getRealPath();
            $path = substr($path, strrpos($path, 'web/') + 4);
            $item = $this->extractData($filename);

            $timestamp = $item['timestamp'];

            $videos[$item['bal']][$timestamp] = array(
                'basename' => str_replace('/', '$', $path),
                'description' => sprintf('Le %s à %s', $item['date'], $item['time_cat'])
            );
        }

        ksort($videos);
        foreach($videos as &$video) {
            ksort($video);
        }
        return $videos;
    }


    /**
     * @Route("/show/{serie}/{pathVideo}", name="show_video")
     * @Template()
     */
    public function showAction($serie, $pathVideo)
    {
        $pathVideo = str_replace('$', '/', $pathVideo);
        $item = $this->extractData(basename($pathVideo));
        $description = sprintf('Le %s à %s', $item['date'], $item['time_cat']);
        $request = $this->getRequest();
        $baseUrl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();

        $pathVideo = $baseUrl . '/' . $pathVideo;

        return array(
            'serie' => $serie,
            'path' => $pathVideo,
            'description' => $description
        );
    }

    protected function extractData($filename)
    {
        if (preg_match('/^(\d{6})_bal(\d{2})-\d{4}-ch\d{2}_(\d{14})/', $filename, $matches)) {
            $timeCat = str_split($matches[1], 2);
            $timeCat = sprintf("%02d:%02d:%02d", $timeCat[0], $timeCat[1], $timeCat[2]);
            $bal = (int) $matches[2];
            $date = date('d/m/Y', strtotime($matches[3]));
            $hour = substr($matches[3], 8);
            return array('timestamp' => $matches[3].$matches[1], 'time_cat' => $timeCat,'bal' => $bal, 'date' => $date, 'hour' => $hour);
        } else {
            // $this->logError("Nom de fichier non conforme : $filename");
        }
    }
}
