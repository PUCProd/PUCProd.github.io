<?php

class Cadastro_Disciplina extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->render("disciplina/cadastro_view");
    }

}

