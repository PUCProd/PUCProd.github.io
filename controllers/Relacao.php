<?php

class Relacao extends Controller{

    function __construct() {
        parent::__construct();
    } 
    function pageView($args)
    {
        if($args == "prof")
        {
            $this->view->render('relacao/relacao_view');
        }
        elseif($args == "disc")
        {
            $this->view->render('relacao/relacao_disc_view');
        }
    }
    function relacionar()
    {
        require_once 'models/relacao_model.php';
        $model = new Relacao_Model();
        $model->relacionar();
    }
    function getRelacao($args = false)
    {
        require_once 'models/relacao_model.php';
        $model = new Relacao_Model();
        $resultado = $model->getRelacao($args);
 
        return $resultado;
    }
    
    function excluir()
    {
        require_once 'models/relacao_model.php';
        $model = new Relacao_Model();
        $model->excluir();
    }
    function filtrar($args = false)
    {
        require_once 'models/relacao_model.php';
        $model = new Relacao_Model();
        $rel = $model->filtrar($args);
        $this->view->render('relacao/relacao_filtro_view', null, null, $rel);
    }
}

