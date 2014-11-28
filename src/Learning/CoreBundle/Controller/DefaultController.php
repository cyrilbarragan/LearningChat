<?php

namespace Learning\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Learning\CoreBundle\Utils\CatTree;
use Symfony\Component\Finder\Finder;
use Symfony\Bundle\TwigBundle\Extension\AssetsExtension;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {

        $finder = new Finder();
        $finder->files()->name('*.mp4')->in($this->get('kernel')->getRootDir().'/../web/videosclipped');


        $videos = array();
        foreach ($finder as $video){
            $videos[] = $video;
        }
        return array('videos' => $videos);
    }


    /**
     * @Route("/show/{pathVideo}", name="show_video")
     * @Template()
     */
    public function showAction($pathVideo)
    {
        $request = $this->getRequest();
        $baseUrl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();
        $pathVideo = $baseUrl . '/videosclipped/'.$pathVideo;
        return array('path' => $pathVideo);
    }



}
