<?php

class Horarios_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function add($id = NULL)
    {
        //require_once 'views/disciplina/redirecionar.php';
       // require_once 'views/center.php';
      
        
        echo 'Nao implementei os insert... Colocado apenas o ID da disciplina nas tabelas...';
        $colunas = array("segunda0","terca0","quarta0","quinta0","sexta0");
        $col = array("seg_0","ter_0","qua_0","qui_0","sex_0");
        $insert = "";
        for($conta = 1; $conta <= 10; $conta++)
        {
            for($coluna = 1; $coluna <=6; $coluna++)
            {
                for($linha = 0; $linha < 5; $linha++)
                {
                    $string = $colunas[$linha].$coluna."|".$conta;
                    if(isset($_POST[$string]))
                    {
                        $com = "SELECT * FROM disciplina WHERE id = ".$_POST[$string];
                        $row = mysql_query($com);

                        while($rows = mysql_fetch_array($row))
                        {
                            echo "<br><br><h4>'$col[$linha]$coluna'</h4><br>";
                           /* if($conta == 1)
                            if($conta == 2)
                            if($conta == 3)
                            if($conta == 4)
                            if($conta == 5)
                            if($conta == 6)
                            if($conta == 7)
                            if($conta == 8)
                            if($conta == 9)
                            if($conta == 10)*/
                            $id[] = $rows["id"];
                            echo "id da disciplina: ".$rows["id"];
                            echo "<br>";
                            echo "nome da disciplina: ".$rows["nome"];
                            echo "<br>";
                            echo "apelido da disciplina".$rows["apelido"];
                            echo "<br>";
                            echo "periodo da disciplina: ".$rows["periodo"];
                            echo "<br>";
                            echo "tipo de disciplina: ".$rows["tipo_disciplina"];
                            echo "<br>";
                            echo "quantidade de grupos: ".$rows["qt_grupos"];
                            echo "<br>";
                            echo "carga horaria: ".$rows['carga_horaria'];
                            echo "<br>";
                            echo "na coluna: ".$colunas[$linha].$coluna;
                        }
                        echo "<br>"; 
                    }
                }
            }
        }
        for($controle = 0; $controle < sizeof($id); $controle++)
        {
            $insert = $insert.$id[$controle].",";
        }
       /*// $insert[strlen($insert)-1] = ")";
                        echo $insert;//*/
        
       // require_once 'views/footer.php';
   }
   
   function getListaNome()
   {
   }
   
   function excluir($id)
   {
   }
   function filtrar()
   {
   }
}
        