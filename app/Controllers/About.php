<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller {
	
	public function index() {
        session()->setTempdata("about", "active", "2");
        session()->set("page", "About");
		return view('about');
	}
}
