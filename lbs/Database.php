<?php

class Database{

    function __construct() {
        mysql_pconnect(SERVER,USER,PASSWORD);
        mysql_query("CREATE DATABASE IF NOT EXISTS prod_database");
        mysql_select_db('prod_database');
        
    }
    function criarTabelas()
    {
//para criar a tabela de professores
        $sql = "CREATE TABLE professor (id_professor INT(6) "
                . "UNSIGNED AUTO_INCREMENT PRIMARY KEY,nome VARCHAR(30) "
                . "NOT NULL,apelido VARCHAR(30) NOT NULL,carga_horaria "
                . "INT(6)NOT NULL)";

        if (mysql_query($sql) == TRUE) {
            echo "Tabela professor criada";
        }
    
         //tabela disciplina
        $sql2 = "CREATE TABLE disciplina (id INT(6) UNSIGNED AUTO_INCREMENT "
                . "PRIMARY KEY,nome VARCHAR(30),apelido VARCHAR(30),periodo "
                . "INT(6),tipo_disciplina VARCHAR(7),qt_grupos INT(6),"
                . "carga_horaria INT(6))";
         
        if (mysql_query($sql2) == TRUE) {
            echo "Tabela disciplina criada";
        }
        //tabela relacao
        $sql3 = "CREATE TABLE relacao (FK_id_professor INT(6), "
                . "FK_id_disciplina INT(6), "
                . "status VARCHAR(30))";

        if (mysql_query($sql3) == TRUE) {
            echo "Tabela relacao criada";
        }
        //tabela organizar_horario
        $sql4 = "CREATE TABLE organizar_horario (id_org_horario INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "id_professor_FK INT (6),"
                . "seg_01 INT (1), seg_02 INT (1), seg_03 INT (1), seg_04 INT (1),"
                . "seg_05 INT (1), seg_06 INT (1), ter_01 INT (1), ter_02 INT (1),"
                . "ter_03 INT (1), ter_04 INT (1), ter_05 INT (1), ter_06 INT (1),"
                . "qua_01 INT (1), qua_02 INT (1), qua_03 INT (1), qua_04 INT (1),"
                . "qua_05 INT (1), qua_06 INT (1), qui_01 INT (1), qui_02 INT (1),"
                . "qui_03 INT (1), qui_04 INT (1), qui_05 INT (1), qui_06 INT (1),"
                . "sex_01 INT (1), sex_02 INT (1), sex_03 INT (1), sex_04 INT (1),"
                . "sex_05 INT (1), sex_06 INT (1))";
        
        if (mysql_query($sql4))
        {
            echo 'criou organizar_horario';
        }
        
    }
    
   
    
    function criarTabelaHorarios()
    {
        $sql0 = "CREATE TABLE HorarioPrimeiro (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, "
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql0);
        
        $sql1 = "CREATE TABLE HorarioSegundo (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql1);
        $sql2 = "CREATE TABLE HorarioTerceiro (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql2);
        
        $sql3 = "CREATE TABLE HorarioQuarto (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
       mysql_query($sql3);
        $sql4 = "CREATE TABLE HorarioQuinto (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql4);
        
        $sql5 = "CREATE TABLE HorarioSexto (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql5);
        
        $sql6 = "CREATE TABLE HorarioSetimo (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql6);
        $sql7 = "CREATE TABLE HorarioOitavo (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
       mysql_query($sql7);
        
        $sql8 = "CREATE TABLE HorarioNono (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql8);
        $sql9 = "CREATE TABLE HorarioDecimo (id_Primeiro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                . "seg_01 INT (5), seg_02 INT (5), seg_03 INT (5), seg_04 INT (5),"
                . "seg_05 INT (5), seg_06 INT (5), ter_01 INT (5), ter_02 INT (5),"
                . "ter_03 INT (5), ter_04 INT (5), ter_05 INT (5), ter_06 INT (5),"
                . "qua_01 INT (5), qua_02 INT (5), qua_03 INT (5), qua_04 INT (5),"
                . "qua_05 INT (5), qua_06 INT (5), qui_01 INT (5), qui_02 INT (5),"
                . "qui_03 INT (5), qui_04 INT (5), qui_05 INT (5), qui_06 INT (5),"
                . "sex_01 INT (5), sex_02 INT (5), sex_03 INT (5), sex_04 INT (5),"
                . "sex_05 INT (5), sex_06 INT (5))";
        
        mysql_query($sql9);
    }
    function dropTable()
    {
        $sql0 = "DROP TABLE HorarioPrimeiro";
        
        $sql1 = "DROP TABLE HorarioSegundo";

        $sql2 = "DROP TABLE HorarioTerceiro";

        $sql3 = "DROP TABLE HorarioQuarto";
        
        $sql4 = "DROP TABLE HorarioQuinto";
        
        $sql5 = "DROP TABLE HorarioSexto";
        
        $sql6 = "DROP TABLE HorarioSetimo";
        
        $sql7 = "DROP TABLE HorarioOitavo";
        
        $sql8 = "DROP TABLE HorarioNono";
        
        $sql9 = "DROP TABLE HorarioDecimo";
        
        mysql_query($sql0);
        mysql_query($sql1);
        mysql_query($sql2);
        mysql_query($sql3);
        mysql_query($sql4);
        mysql_query($sql5);
        mysql_query($sql6);
        mysql_query($sql7);
        mysql_query($sql8);
        mysql_query($sql9);
    }

}