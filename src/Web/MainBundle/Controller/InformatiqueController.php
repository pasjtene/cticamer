<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Web\AppBundle\Controller\TokenAuthenticatedController;

/**
 * @Route("/informatique")
 */
class InformatiqueController extends Controller implements TokenAuthenticatedController
{
    /**
     * @Route("/", name="main_informatique"))
     */
    public function indexAction()
    {
        return $this->render('MainBundle:CTI:Informatique/informatique.html.twig');
    }

    /**
     * @Route("/cours_particuliers", name="main_CoursParticuliersdInfo"))
     */
    public function CoursParticuliersdInfoAction()
    {
       return $this->render('MainBundle:CTI:Informatique/cours_particuliers.html.twig');

    }


}