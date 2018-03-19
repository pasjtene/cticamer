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

    /**
     * @Route("/Secretariat_Bureautique", name="main_LogicielsBureautique"))
     */
    public function LogicielsBureautiqueAction()
    {
        return $this->render('MainBundle:CTI:Informatique/logiciels_de_Bureautique.html.twig');
    }

    /**
     * @Route("/Infographie_Design_et_Media", name="main_Design"))
     */
    public function DesignAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Informatique/infographie_Design_et_Media.html.twig');
    }

    /**
     * @Route("/Utiliser_Internet", name="main_Internet"))
     */
    public function InternetAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Informatique/utiliser_Internet.html.twig');
    }

    /**
     * @Route("/Developpement_dApplication_Web", name="main_AppliWeb"))
     */
    public function AppliWebAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Informatique/developpement_dApplication_Web.html.twig', $array);
    }

    /**
     * @Route("/Securite_Informatique", name="main_SecuriteInfo"))
     */
    public function SecuriteInfoAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Informatique/securite_Informatique.html.twig', $array);
    }


}