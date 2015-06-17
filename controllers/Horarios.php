<?php

class Horarios extends Controller{
    
    function __construct() {
        parent::__construct();
    }
    function add($id = NULL)
    {
        require_once 'models/Horarios_Model.php';
        $model = new Horarios_Model();
        $model->add($id);
    }
    function getListaNome($periodo)
    {
        require_once 'models/Horarios_Model.php';
        $model = new Horarios_Model();
        $resultado = $model->getListaNome($periodo);
        return $resultado;
    }
    function organizarDisciplina()
    {
        $this->view->render('horarios/horarioPrimeiro_View');
    }
}



