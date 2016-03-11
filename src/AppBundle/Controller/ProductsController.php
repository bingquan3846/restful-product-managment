<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 10.03.16
 * Time: 16:24
 */

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\View;
use Symfony\Component\Stopwatch\Stopwatch;


class ProductsController extends FOSRestController implements  ClassResourceInterface

{

    public function getCategoryAction($slug){

        $doctrine = $this->get('doctrine');
        $products = $doctrine->getRepository('AppBundle:Product')->findBy( array('enabled' => 1, 'id' => $slug), array('name' => 'asc'), 10);

        $view = view::create($products);

        return $this->handleView($view);
     }
} 