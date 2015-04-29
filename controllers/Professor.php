<?php

class Professor extends Controller{

    function __construct() {
        parent::__construct();
        
    }
    function pageView()
    {
        $this->view->render('professor/professor_view');
        
    }
    function getListaNome($args = null)
    {   

            require_once 'models/professor_model.php';
            $model = new Professor_Model();
            $resultado = $model->getListaNome();            

            return $resultado;
    }
    function cadastroView()
    {
     $this->view->render('professor/cadastro_professor_view');
    }
    function add()
    {
        require_once 'models/professor_model.php';
        $model = new Professor_Model();
        $model->add();
    }
    function preferenciaView()
    {
        $this->view->render('preferencia/preferencia_view');
        
    }
    function getPreferenciaNome($args = false)
    {
        if($args == false)
        {
            $this->pageView();
            return;
        }
        else
        {
        require_once 'models/professor_model.php';
        $model = new Professor_Model();
        $resultado = $model->getPreferenciaNome($args);
        $org = $model->getOrganizaHorario($args);
        $this->view->renderSpecific('preferencia/preferencia_view',$resultado, $org);
       // return $resultado;
        }
    }
    function filtrar($args = false)
    {
        require_once 'models/professor_model.php';
        $model = new Professor_Model();
        $prof = $model->filtrar($args);
        $this->view->render('professor/professor_filtro_view', $prof);
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
        require_once 'models/professor_model.php';
        $model = new Professor_Model();
        $model->excluir($id);
    }
    function organizaHorario($id)
    {
        require_once 'models/professor_model.php';
        $model = new Professor_Model();
        $model->organizaHorario($id);
        $this->getPreferenciaNome($id);
    }
}
