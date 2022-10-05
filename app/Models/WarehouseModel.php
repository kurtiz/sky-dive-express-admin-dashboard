<?php

namespace App\Models;
use CodeIgniter\Model;

class WarehouseModel extends Model {
    /**
     * @var $tbl string name of the table used for this model
     */
    protected $tbl = "warehouse";

    /**
     * @param $fields array the various parameters to authenticate the admin (e.g. email & password)
     * @return false|mixed returns an object when the admin is authenticated else returns false
     */
    public function createWarehouse(array $fields){
        $builder = $this->db->table($this->tbl);
        $builder->insert($fields);
        if ($this->db->affectedRows() == 1) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param $clauses array the various parameters to retrieve the salt of the user (e.g. email or username)
     * @return false|mixed returns an object when the clauses given exists else returns false
     */
    public function getWarehouses(){
        $builder = $this->db->table($this->tbl);
        $builder->select();
        $result = $builder->get();

        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        }else {
            return false;
        }
    }
}