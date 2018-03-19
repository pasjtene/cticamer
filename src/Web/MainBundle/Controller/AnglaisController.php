<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Web\AppBundle\Controller\TokenAuthenticatedController;

/**
 * @Route("/anglais")
 */
class AnglaisController extends Controller implements TokenAuthenticatedController
{
    /**
     * @Route("/", name="main_anglais"))
     */
    public function indexAction()
    {
        return $this->render('MainBundle:CTI:Anglais/anglais.html.twig');
    }

    /**
     * @Route("/cours_intensifs", name="main_CoursIntensifs"))
     */
    public function CoursIntensifsAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Anglais/cours_intensifs.html.twig', $array);
    }

    /**
     * @Route("/formation_continue", name="main_FormationContinue"))
     */
    public function FormationContinueAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Anglais/formation_continue.html.twig', $array);
    }

    /**
     * @Route("/pour_entreprises", name="main_PourEntreprises"))
     */
    public function PourEntreprisesAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Anglais/pour_entreprises.html.twig', $array);
    }



    /**
     * @Route("/cours_particuliers", name="main_CoursParticulier"))
     */
    public function CoursParticulierAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Anglais/cours_particuliers.html.twig', $array);
    }
}








/**
 * Created by PhpStorm.
 * User: CTI
 * Date: 19/03/2018
 * Time: 10:35
 */