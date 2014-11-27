<?php

namespace Learning\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Learning\CoreBundle\Utils\CatTree;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $tree = new CatTree();
        var_dump($tree->getForDate('2014-11-04'));
        die('stop');
        return array('name' => $name);
    }
}
