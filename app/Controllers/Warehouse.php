<?php 

namespace App\Controllers;

use App\Models\WarehouseModel;
use CodeIgniter\Controller;

class Warehouse extends Controller {

    private $warehouseModel;

    public function __construct() {
        $this->warehouseModel = new WarehouseModel();
    }
	
	public function index() {
        session()->setTempdata("warehouse", "active", 1);
        session()->setTempdata("warehouses", "active", 1);
        session()->set("page", "Warehouse");

        $data["warehouses"] = $this->warehouseModel->getWarehouses();
		return view('warehouses', $data);
	}

    public function add() {
        session()->setTempdata("warehouse", "active", 1);
        session()->setTempdata("add_warehouse", "active", 1);
        session()->set("page", "Add Warehouse");

        if($this->request->getMethod() == "post"){
            $fields = [
                "warehouse_id" => hash(
                    "md5",
                    $this->request->getVar(
                        "branch",
                        FILTER_SANITIZE_STRING).date(
                            "ymdhisa"
                    )),
                "warehouse_branch" => $this->request->getVar("branch", FILTER_SANITIZE_STRING),
                "warehouse_email" => $this->request->getVar("email", FILTER_SANITIZE_EMAIL),
                "warehouse_address" => $this->request->getVar("address", FILTER_SANITIZE_STRING),
                "warehouse_mobile" => $this->request->getVar("mobile", FILTER_SANITIZE_STRING),
                "date_added" => date("Y-m-d"),
                "time_added" => date("h:i:s"),
                "user_id" => session()->get("user")->user_id,
            ];

            if($this->warehouseModel->createWarehouse($fields)){
                session()->setTempdata("success", "Added ". $fields["warehouse_branch"] . " successfully", 1);
            } else {
                session()->setTempdata("error", "An error occurred!", 1);
            }
            return redirect()->to(current_url());
        }
		return view('add_warehouse');
	}
}
