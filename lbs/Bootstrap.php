<?php

class Bootstrap {

    function __construct() {
        

       $url = isset($_GET['url']) ? $_GET['url'] : null;
       $url = rtrim($url, '/');
       $url = rtrim($url, '.php');
       $url = explode('/',$url);
       
       
       
       //se não tiver nada depois de MVC/ redireciona para pagina principal
       if(empty($url[0]))
       {
           require_once 'controllers/index.php'; //home
           $controller = new Home_Controller(); //home page
           return false;
       }

       //se tiver algo depois MVC/  tentará acessar a página
       $file = 'controllers/'.$url[0].'.php';
       if(file_exists($file))
       {
         require_once $file;        
       }
       else
       {
           require_once 'controllers/error.php';
           $controller = new Error();
           return false;
       }
       //faz load do model do controller
       $controller = new $url[0];
       $controller->loadModel($url[0]);
       //se tiver MVC/classe/metodo/variável irá chamar o método;
       if(isset($url[2]))
       {
           $controller->{$url[1]}($url[2]);
       }
       else
       {
       if(isset($url[1]))
       {
           $controller->{$url[1]}();
       }
       }
       
    }

}

