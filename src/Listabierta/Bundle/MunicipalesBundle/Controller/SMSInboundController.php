<?php

namespace Listabierta\Bundle\MunicipalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SMSInboundController extends Controller
{
	public function indexAction(Request $request = NULL)
	{
		$query = $request->query;
		$msisdn = $query->msisdn;

		return new Response('OK', 200);
	}
	
	public function callbackAction(Request $request = NULL)
	{
		$query = $request->query;
		$msisdn = $query->msisdn;

		return new Response('OK', 200);
	}
}
