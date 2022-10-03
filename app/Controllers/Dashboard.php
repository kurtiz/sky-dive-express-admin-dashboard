<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller {
	
	public function index() {
        session()->setTempdata("dashboard", "active", 2);
        session()->set("page", "Dashboard");

		return view('dashboard');
	}
}
