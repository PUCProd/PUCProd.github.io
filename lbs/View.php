<?php

class View {

    function __construct() {
    }
    
    public function render($name, $prof = NULL, $dis = NULL, $rel = NULL)
    {
            require 'views/header.php';
            require 'views/' . $name .'.php';
            require 'views/footer.php';

    }
    
    public function renderSpecific($name, $prof = null, $row = null)
    {
        if(isset($prof) && isset($row))
        {
            require 'views/header.php';
            require_once 'views/'.$name.'.php';
            require 'views/footer.php';
        }
        else
        {
            $this->render($name);
        }
    }

}

