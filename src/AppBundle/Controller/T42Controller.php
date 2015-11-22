<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle;
//use Symfony\Component\Routing\RouteCollection;
//use Symfony\Component\Routing\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class T42Controller extends Controller
{
	/**
	 * @route("/{index}", name ="index")
	 * @Method("GET")
	 * @Template("T42/T42.html.twig")
	 */
	function indexAction($index) {
		if ($index=='T42'){
			
			 return $this->render('T42/T42.html.twig',array('page'=> 'T42'));
			
		}
		else {
			return new Response('<html><body>No existe la página</body></html>');
		}
		
	}
	
	/**
	 * @route ("/T42/{about}", name="about")
	 */
	
	function aboutAction($about) {
		if ($about=='about') {
			
			return $this->render('T42/T42.html.twig',array('page'=>'about'));
		}
	}
	
	/**
	 * @route ("/T42/{contact}/", name="contact")
	 */
	
	function contactAction($contact) {
		if($contact=='contact') {
			return $this->render('T42/T42.html.twig',array('page'=>'contact'));
		}
		
	}
		
}

