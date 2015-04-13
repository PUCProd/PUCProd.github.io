<?php

class Controller{

    function __construct() {
        $this->view = new View();
    }
    
    function loadModel($name)
    {
        $path = 'models/'.$name.'_Model.php';
        
        if(file_exists($path))
        {
            require_once $path;
            $class = $name.'_Model';
            $this->model = new $class();
            
        }
    }
}

