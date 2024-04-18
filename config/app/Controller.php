<?php
class Controller{
    protected $model, $views;
    public function _construct()
    {
        $this->cargarModel();
    }
    public function cargarModel(){
        $isAdmin = strpos($_SERVER,'/' . ADMIN) !== false;
        $nombreModel = get_class($this) . 'Model';
        $ruta = ($isAdmin) ? 'models/principal/' .$nombreModel . '.php' : 'models/principal' . $nombreModel . '.php' ;
        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $nombreModel();
        }



    }
}