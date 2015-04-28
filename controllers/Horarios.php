<?php

class Horarios extends Controller{
    
    function __construct() {
        parent::__construct();
    }
    function pageView()
    {
        $this->view->render('disciplina/disciplina_view');
    }
    function cadastroView()
    {
        $this->view->render('disciplina/cadastro_disciplina_view');
    }
    function add($id = NULL)
    {
        require_once 'models/Horarios_Model.php';
        $model = new Horarios_Model();
        $model->add($id);
    }
    function getListaNome()
    {
        require_once 'models/Disciplina_model.php';
        $model = new Disciplina_Model();
        $resultado = $model->getListaNome();
        
        return $resultado;
    }
    function excluir($id = false)
    {
        if(!$id)
        {
            return;
        }
        if(!is_numeric($id))
        {
            return;
        }
        require_once 'models/disciplina_model.php';
        $model = new Disciplina_Model();
        $model->excluir($id);
    }
    function organizarDisciplina()
    {
        $this->view->render('horarios/horarioPrimeiro_View');
    }
    
    function filtrar()
    {
        require_once 'models/disciplina_model.php';
        $model = new Disciplina_Model();
        $dis = $model->filtrar();
        $this->view->render('disciplina/disciplina_filtro_view', null, $dis);
    }
}



