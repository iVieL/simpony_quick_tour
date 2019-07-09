<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {

    /**
     * @Route("/hello/{name}")
     */
    public function index($name) {
        return $this->render('default/index.html.twig', [
            'name' => $name
        ]);
    }

    /*
     * @Route("/simplicity")
     */
    public function simple() {
        //return new Response('Simple! Easy! Great!');
    }

    /**
     * @Route("api/hello/{name}")
     */
    public function apiExample($name) {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks'
        ]);
    }
}
//https://symfony.com/doc/current/quick_tour/flex_recipes.html