<?php
class Principal extends Controller{
    public function __construct() {
        parent :: _construct();
    }
    public function index() {
       
        $this->views->getView('servicios');
    }
}
?>