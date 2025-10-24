<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MUser;

class Signin extends BaseController
{
	protected $session;
	public function __construct()
	{
		$this->model = new MUser();
		$this->session = session();
	}

	public function index()
	{
		if (isset($_SESSION['id'])) {
			return redirect()->to('/dashboard');
		}
		return view('login/index');
	}

	public function auth()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		
		if (!empty($username) && !empty($password)) {
			$data = $this->model->where('username', $username)->first();
			// dd($data);
			if ($data) {
				$pass = $data['password'];
				$verivy_pass = password_verify($password, $pass);
				if ($verivy_pass) {
					$data['logged_in'] = true;
					$this->session->set($data);
					return redirect()->to('/dashboard');
				} else {
					$this->session->setFlashdata('msg_pass', 'You have entered an invalid password');
					return redirect()->to('/signin');
				}
			} else {
				$this->session->setFlashdata('msg_pass', 'Username is not registered yet');
				return redirect()->to('/signin');
			}
		} else {
			$this->session->setFlashdata('msg_emp', 'Enter username and password');
			return redirect()->to('/signin');
		}
	}

	public function hashPassword($pw)
	{
		$hassed = password_hash($pw, PASSWORD_DEFAULT);
		echo $pw.'<br>';
		echo $hassed;
	}

	public function logout()
	{
		$this->session->destroy();
		return redirect()->to('/signin');
	}
}
