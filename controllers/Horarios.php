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
        //require_once 'views/horarios/redirecionar_horarios.php';
       // require_once 'views/center.php';
       // require_once 'views/footer.php';
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



