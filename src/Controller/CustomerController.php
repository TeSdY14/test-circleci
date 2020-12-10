<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/", name="customer", methods={"GET"})
     */
    public function index(): Response
    {
        $name = "Tesdy";
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
            'name' => $name,
        ]);
    }
}
