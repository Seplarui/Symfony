<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class T41Controller extends Controller
{
	/**
	 *
	 * @route("/magic/{number}", name="number")
	 * 
	 */
    public function magicNumberAction($number)
    
    {
        // replace this example code with whatever you need
        $number=rand();
        return new Response('<html><body>El número mágico generado es '.$number.'!</body></html>');
    }
    
    /**
     * 
     * @route ("/dow/{dia}", name="dia")
     */
    
    
    public function dayOfWeekAction($dia) {
    	
    	$dow=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
    	return new Response('<html><body>El dia de la semana es '. $dow[$dia].'.</body></html>.');
    	
    	
    	
    }
 
    
}
