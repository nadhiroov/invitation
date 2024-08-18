<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(): string
	{
		return view('landingPage');
	}

	public function welcome() : string {
		return view('welcome_message');
	}
}
