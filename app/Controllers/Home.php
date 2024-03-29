<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(): string
	{
		return view('layout/front');
	}

	public function welcome() : string {
		return view('welcome_message');
	}
}
