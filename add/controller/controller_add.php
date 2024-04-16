<?php 
require "model/model_add.php";

class MI_Controller_Add {
    private $mi_model_add;

    public function __construct() {
                $this->mi_model_add = new MI_Model_Add();
    }
    public function index() {
            $this->mi_model_add->insert_data();
            include "view/index.php";
    }
}