<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $notes = [
            'Lorem ipsum dolor sit amet, consectetur adipisicing.',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium.',
            'Lorem ipsum.'
        ];

        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'notes' => $notes
        ]);
    }
}