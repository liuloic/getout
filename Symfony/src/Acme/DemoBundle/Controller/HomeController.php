<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Route("/", name="_home")
     * @Template()
     */
    public function indexAction()
    {

    	$nbPomme = 3;

        return array(
        	"blabla" => "hello",
        	"nbDePomme" => $nbPomme,
        	);
    }


    /**
     * @Route("/regles", name="home_regles")
     * @Template()
     */
    public function reglesAction()
    {

    	$titrePage = "blablablabla condition generale d'utilisation";

        return array(
        	"blabla" => "dsmljkfsdlmfjlkdsjf",
        	"titre" => $titrePage,
        	);
    }

}