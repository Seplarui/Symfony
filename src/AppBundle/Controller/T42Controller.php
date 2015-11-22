<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle;



class T42Controller extends Controller
{
	/**
	 * @route("/{index}", name ="index")
	 */
	function indexAction($index) {
		if ($index=='T42'){
			//return new Response('<html><body>Hola mundo</body></html>');
			//return $this->render(AppBundle::T42Controller/T42.html.twig);//
			//return $this->render(AppBundle\Controller\T42Controller\T42.html.twig);//
			//return $this->render(AppBundle\Controller::T42Controller);
			//return $this->render(T42.html.twig);//
			//return $this->render(T42Controller/T42.html.twig);//
			//return $this->render("G:\OneDrive\Documentos\DAW2\DWS\symfony\T3\app\Resources\\views\T42\T42.html.twig");
			//return $this->render('AppBundle:T42Controller:Views:T42.html.twig');
			return $this->render('T42/T42.html.twig');
		}
		else {
			return new Response('<html><body>No existe la página</body></html>');
		}
		
	}
}

