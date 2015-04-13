<?php

class Disciplina_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function add()
    {
        require_once 'views/disciplina/redirecionar.php';
        require_once 'views/center.php';
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $periodo = $_POST['periodo'];
        $tipo_disciplina = $_POST['tipo'];
        $qt_grupos = $_POST['qt_grupo'];
        $carga_horaria = $_POST['horario'];
        $erro = 0;
        if(empty($nome) == TRUE){
            echo "<br>Favor digitar nome da nome";
            $erro = $erro + 1;
        }else{
            if(strcmp($nome, "") == 0){
                echo "<br>Favor digitar nome da nome";
                $erro = $erro + 1;
            }else{
                //echo "Apelido : $apelido";
            }            
        }
        
        if(empty($apelido) == TRUE){
            echo "<br>Favor digitar apelido";
            $erro = $erro + 1;
        }else{
            if(strcmp($apelido, "") == 0){
                echo "<br>Favor digitar nome da nome";
                $erro = $erro + 1;
            }else{
                //echo "Apelido : $apelido";
            }
        }
        
        if($erro == 0){
            echo "Todos os dados foram digitados corretamente!";
            if (mysql_query("INSERT INTO disciplina (id, nome, apelido, periodo, "
                             . "tipo_disciplina, qt_grupos, carga_horaria)"
                                  . " VALUES (0, '$nome', '$apelido', '$periodo', "
                                      . "'$tipo_disciplina', '$qt_grupos', "
                                         . "'$carga_horaria')"))
        {
           echo'inserido'; 
        }
        }
    

        require_once 'views/footer.php';
   }
   
   function getListaNome()
   {
       $nome_disciplina = "SELECT * FROM disciplina ORDER BY nome ASC";
       $row = mysql_query($nome_disciplina);

       return $row;
   }
   
   function excluir($id)
   {
       require_once 'views/disciplina/redirecionar.php';
       require_once 'views/center.php';
       $sql = "DELETE FROM disciplina WHERE id = ".$id;
       $resultado = mysql_query($sql);

        if($resultado){
            echo "Deletado com sucesso";
        }else{
            echo "Error!";
        }
        require_once 'views/footer.php';
   }
   function filtrar()
   {
       if(isset($_POST['filtrar']))
        {
             $var = $_POST['filtrar'];
             $row = mysql_query("SELECT * FROM disciplina WHERE nome LIKE '%$var%'");
        }
        return $row;
   }
}
