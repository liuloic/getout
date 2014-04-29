<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class IndexController extends Controller {
    
    public function testAction()
    {
      // On récupère le repository
      $repository = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('AcmeUserBundle:Tag');

      // On récupère l'entité correspondant à l'id $id
      $tag = $repository->find(1);
//      var_dump($tag);
//        print_r($tag);
//          echo $tag['taName'];

      return $this->render('AcmeUserBundle:Index:test.html.twig', array(
        'tag' => $tag
      ));
    }
}