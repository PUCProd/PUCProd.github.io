<?php

class Horarios_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function add($id = NULL)
    {
        //require_once 'views/disciplina/redirecionar.php';
       // require_once 'views/center.php';
        
        echo 'Nao implementei os insert';
    $colunas = array("segunda0","terca0","quarta0","quinta0","sexta0");
        for($conta = 1; $conta <= 10; $conta++)
        {
            for($coluna = 1; $coluna <=6; $coluna++)
            {
                for($linha = 0; $linha < 5; $linha++)
                {
                    $string = $colunas[$linha].$coluna."|".$conta;
                    if(isset($_POST[$string]))
                    {
            var_dump($_POST[$string]);
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST[$string];
            $row = mysql_query($com);
            
            
            while($rows = mysql_fetch_array($row))
            {
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
        }
                    echo "<br>";
                }
            }
        }

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
        