<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Warehouse extends Controller {
	
	public function index() {
        session()->setTempdata("warehouse", "active", 2);
        session()->set("page", "Warehouse");
		return view('warehouses');
	}

    public function add() {
        session()->setTempdata("warehouse", "active", 2);
        session()->set("page", "Add Warehouse");
		return view('add_warehouse');
	}
}
