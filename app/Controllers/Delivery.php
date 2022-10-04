<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Delivery extends Controller {
	
	public function index() {
        session()->setTempdata("delivery", "active", 2);
        session()->setTempdata("deliveries", "active", 2);
        session()->set("page", "Delivery");
		return view('delivery');
	}
    public function add() {
        session()->setTempdata("delivery", "active", 2);
        session()->setTempdata("add_delivery", "active", 2);
        session()->set("page", "Delivery");
		return view('add_delivery');
	}
}
