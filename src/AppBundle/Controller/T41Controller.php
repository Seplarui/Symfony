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
    	
    /**
     * @route ("/tableAction/{tabla}", name="tabla")
     */
    	
    public function tableAction($tabla) {
    	
    	//return new Response('<html><body>La tabla de multiplicar de '.$tabla.'.</body></html>');
    	echo "<table border=1>";
    	echo "<tr>";
    	echo "<th>";
    	echo "La tabla del " . $tabla;
    	echo "</th>";
    	echo "</tr>";
    	
    	for($i=1;$i<=10;$i++) {
    		echo"<tr>";
    		echo"<td>";
    	
    		echo $i."*".$tabla."=".$i*$tabla;
    	
    		echo"</td>";
    		echo"</tr>";
    	}
    	echo "</table>";
    	}
    
    
    /**
     * @route ("/helloAction/{lang}", name="lang")
    */
    
    public function helloAction($lang) {
    	
    	switch($lang) {
    		
    		case 'es':
    			return new Response(print "Bienvenido");
    			break;
    		case 'en':
    			return new Response (print "Welcome");
    			break;
    		case 'fr':
    			return new Response(print "Bienvenu");
    			break;
    		case 'de':
    			return new Response(print "Willkommen");
    			break;
    		case 'ru':
    			return new Response(print "добро пожаловать");
    			break;
    		default:
    			return new Response(print "Idioma incorrecto");
    			
    	}
    	
    	
    }
}