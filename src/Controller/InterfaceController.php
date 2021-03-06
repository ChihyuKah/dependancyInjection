<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity;

class InterfaceController extends AbstractController
{
    /**
     * @Route("/", name="interface")
     */
    public function index()
    {
        return $this->render('interface/index.html.twig', [
            'controller_name' => 'InterfaceController',
        ]);
    }
}
