<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbcController extends Controller
{
    /**
     * @Route("/abc", name="abc")
     */
    public function index()
    {
        return $this->render('abc/index.html.twig', [
            'controller_name' => 'AbcController',
        ]);
    }
}
