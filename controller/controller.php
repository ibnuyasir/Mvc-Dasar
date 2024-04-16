<?php 
require_once "model/model.php";

class MI_Controller {
    private $mi_model;

    public function __construct() {
        $this->mi_model = new MI_Models();
    }

    public function index() {
        $data = $this->mi_model->data(); // Menyimpan hasil query dari model
        include "view/index.php";
    }
}