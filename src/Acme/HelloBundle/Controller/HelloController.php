<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Acme\HelloBundle\Entity\Clientes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
	public function indexAction($name)
    {
    	
        return new Response('<html><body>Hello '.$name.'!<br/><a href="">al render</a></body></html>');
    }
	
}
?>