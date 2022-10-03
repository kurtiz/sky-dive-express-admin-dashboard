<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Services extends Controller {
	
	public function index() {
        session()->setTempdata("services", "active", "2");
        session()->set("page", "Services");
		return view('services');
	}
}
