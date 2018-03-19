<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Web\AppBundle\Controller\TokenAuthenticatedController;

/**
 * @Route("/allemand")
 */
class AllemandController extends Controller implements TokenAuthenticatedController
{
    /**
     * @Route("/", name="main_allemand"))
     */
    public function indexAction()
    {
        return $this->render('MainBundle:CTI:Allemand/allemand.html.twig');
    }


    /**
     * @Route("/etudier_en_Allemagne", name="main_etudierEnAllemagne"))
     */
    public function etudierEnAllemagneAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Allemand/etudier_en_Allemagne.html.twig', $array);
    }

    /**
     * @Route("/Regroupement_familial", name="main_regroupementFamilial"))
     */
    public function regroupementFamilialAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Allemand/regroupement_familial.html.twig', $array);
    }

    /**
     * @Route("/Cours_particuliers", name="main_CoursParticuliersdAll"))
     */
    public function main_CoursParticuliersdAllAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Allemand/cours_particuliers_dAllemand.html.twig', $array);
    }

    /**
     * @Route("/Cours_Specialises", name="main_CoursSpecialise"))
     */
    public function CoursSpecialiseAction()
    {
        $array = [];
        return $this->render('MainBundle:CTI:Allemand/cours_Specialises.html.twig', $array);
    }







}
















/**
 * Created by PhpStorm.
 * User: CTI
 * Date: 19/03/2018
 * Time: 10:17
 */