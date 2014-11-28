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

        $finder = new Finder();

        $dir = $this->get('kernel')->getRootDir().'/../web/videosclipped';

        if (!is_dir($dir)) {
            $fs = new Filesystem();
            $fs->mkdir($dir);
        }
        $finder->files()->name('*.mp4')->in($dir);


        $videos = array();
        foreach ($finder as $video) {
            $filename = $video->getBasename();
            $item = $this->extractData($filename);

            $videos[$item['bal']][] = array(
                'basename' => $filename,
                'description' => sprintf('Le %s à %s', $item['date'], $item['time_cat'])
            );
        }

        $videos['3'][0] = array('basename' => 'poulet.mp4', 'description' => 'Le 30/23/4123 à 23:23:23');
        $videos['3'][1] = array('basename' => 'poulet.mp4', 'description' => 'Le 30/23/4123 à 23:23:23');
        $videos['3'][2] = array('basename' => 'poulet.mp4', 'description' => 'Le 30/23/4123 à 23:23:23');

        return array('videos_by_bal' => $videos);
    }


    /**
     * @Route("/show/{pathVideo}", name="show_video")
     * @Template()
     */
    public function showAction($pathVideo)
    {
        $item = $this->extractData($pathVideo);
        $description = sprintf('Le %s à %s', $item['date'], $item['time_cat']);
        $request = $this->getRequest();
        $baseUrl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();
        $dir = $baseUrl . '/videosclipped/';
        $pathVideo = $dir.$pathVideo;
        return array('path' => $pathVideo, 'description' => $description);
    }

    protected function extractData($filename)
    {
        if (preg_match('/^(\d{6})_bal(\d{2})-\d{4}-ch\d{2}_(\d{14})/', $filename, $matches)) {
            $timeCat = str_split($matches[1], 2);
            $timeCat = sprintf("%02d:%02d:%02d", $timeCat[0], $timeCat[1], $timeCat[2]);
            $bal = (int) $matches[2];
            $date = date('d/m/Y', strtotime($matches[3]));
            $hour = substr($matches[3], 8);

            return array('time_cat' => $timeCat,'bal' => $bal, 'date' => $date, 'hour' => $hour);
        } else {
            $this->logError("Nom de fichier non conforme : $filename");
        }
    }
}
