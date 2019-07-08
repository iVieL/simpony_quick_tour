<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {

    /**
     * @Route("/hello/{name}")
     */
    public function index($name) {
        return new Response("Hello $name!!");
    }

    /**
     * @Route("/simplicity")
     */
    public function simple() {
        return new Response('Simple! Easy! Great!');
    }
}
//https://symfony.com/doc/current/quick_tour/flex_recipes.html