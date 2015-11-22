<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class T43Controller extends Controller
{

    public function numberAction($number)
    
    {
    	$request = Request::createFromGlobals();
    	//echo $request->getPathInfo();
    	return new Response("<html><body>El numero es " .$number . " Y los parametros son ". $request->getPathInfo()."</body></html>");
    	
    	
    }
    
    public function textAction($text) {
    	
    	$request = Request::createFromGlobals();
    	return new Response("<html><body>Letras ". $text." y parametros ".$request->getPathInfo(). "</body></html>");
    }
    
    public function pageAction ($page) {
    	
    	$request= Request::createFromGlobals();
    	return new Response("<html><body> Pages ". $page. " y parametros ".$request->getPathInfo(). "<body></html>");
      }
      
      public function formatAction($year,$format) {
      	
      	$request= Request::createFromGlobals();
      	return new Response($year.$format);
      }


}