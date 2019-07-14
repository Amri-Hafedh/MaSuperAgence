<?php

namespace App\Controller;

use symfony\Component\HttpFoundation\Response;

class HomeController
{
	public function index():Response{
		return new Response(content 'Salut les gens');
	}

}