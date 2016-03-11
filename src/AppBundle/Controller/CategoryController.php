<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Stopwatch\Stopwatch;


class CategoryController extends FOSRestController implements  ClassResourceInterface
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    public function categoryAction()
    {
        $stopwatch = new Stopwatch();
        $stopwatch->start('getAllCategories');
        $categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
        $stopwatch->lap('getAllCategories');
        $view = $this->view($categories);
        $event = $stopwatch->stop('getAllCategories');

        return $this->handleView($view);
    }

    public function getProductsAction($slug)
    {
        $doctrine = $this->getDoctrine();
        $category = $doctrine->getRepository('AppBundle:Category')->findOneBy(array('id' => $slug));
        $products = $doctrine->getRepository('AppBundle:Product')->findBy( array('enabled' => 1, 'category' => $category), array('name' => 'asc'), 10);
        $view = $this->view($products);

        return $this->handleView($view);
    }

}
