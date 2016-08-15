<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Epreuves;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('user_login');
    }

    public function homeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $epreuves = $em->getRepository('AppBundle:Epreuves')->findAll();
        /*$texte = $epreuves->getTexte();*/



        return $this->render('default/home.html.twig',
            array(
                'epreuves' => $epreuves,
        ));
    }

    

    public function registerredirectionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('register_confirmed_redirection');
    }
    public function epreuve1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/epreuve1.html.twig');
    }

    public function epreuve2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/epreuve2.html.twig');
    }
}
