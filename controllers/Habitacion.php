<?php
class Habitacion extends Controller{
    public function __construct() {
        parent :: _construct();
    }
    public function index() {
       
        $this->views->getView('habitacion');
    }
}
?>