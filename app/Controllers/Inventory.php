<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Inventory extends Controller {
	
	public function index() {
        session()->setTempdata("inventory", "active", 1);
        session()->setTempdata("inventories", "active", 1);
        session()->set("page", "Inventory");
		return view('inventory');
	}

    public function add() {
        session()->setTempdata("inventory", "active", 1);
        session()->setTempdata("add_inventory", "active", 1);
        session()->set("page", "Add Inventory");
		return view('add_inventory');
	}
}
