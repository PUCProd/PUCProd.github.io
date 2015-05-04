<?php

class Model {

    function __construct() {
        $this->db = new Database();
    }
    function criarTabelas()
    {
        $this->db->criarTabelas();
    }
    function criarTabelaHorarios()
    {
        $this->db->criarTabelaHorarios();
    }
    function dropTable()
    {
        $this->db->dropTable();
    }

}
