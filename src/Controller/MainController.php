<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class.
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



class MainController extends Controller
{
    /**
     * @Route("/project", name="app_home") //add this comment to annotations
     * @Template("main/home.html.twig")

     */

    public function homeAction()
    {

        return ["project_name" => "Mon Projet Symfony!"];

    }

}