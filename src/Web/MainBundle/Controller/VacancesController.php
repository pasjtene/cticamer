<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Web\AppBundle\Controller\TokenAuthenticatedController;

/**
 * @Route("/cours_de_vacances")
 */
class VacancesController extends Controller implements TokenAuthenticatedController
{
    /**
     * @Route("/", name="main_CoursDeVacances"))
     */
    public function indexAction()
    {
        return $this->render('MainBundle:CTI:Vacances/cours_vacances.html.twig');
    }

}
/**
 * Created by PhpStorm.
 * User: CTI
 * Date: 19/03/2018
 * Time: 10:45
 */