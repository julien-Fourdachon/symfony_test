<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class.
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



class ActionController extends Controller
{


    /**
     * @Route("/hello2", name="app_hello1") //add this comment to annotations
     *
     * @Template("main/menu.html.twig")
     */
    public function helloAction(){


    }

}