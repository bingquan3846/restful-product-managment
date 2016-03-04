<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\View;

use AppBundle\Entity\Category;

class DefaultController extends FOSRestController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $category = new Category();
        $category->setName('default category');
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    public function categoryAction(){

        $categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
        $view = $this->view($categories, 200)
                ->setTemplate("AppBundle:category:category.html.twig")
                ->setTemplateVar('categories');
        return $this->handleView($view);

    }
}
