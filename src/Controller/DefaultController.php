<?php

namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {

    /**
     * @Route("/hello/{name}")
     */
    public function index($name, LoggerInterface $logger, GreetingGenerator $generator) {
        $greeting = $generator->getRandomGreeting();
        $logger->info("Saying $greeting to $name!");
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