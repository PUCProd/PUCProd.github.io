<?php

class Horarios_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function add($id = NULL)
    {
        //require_once 'views/disciplina/redirecionar.php';
       // require_once 'views/center.php';
        
        echo 'Nao implementei os insert<br><br>';
        if(isset($_POST['segunda01']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['segunda01'];
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
                echo "na coluna: segunda01";
            }
                    
        }
         if(isset($_POST['segunda02']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['segunda02'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: segunda02";
            }
                    
        }
         if(isset($_POST['segunda03']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['segunda03'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: segunda03";
            }
                    
        }
         if(isset($_POST['segunda04']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['segunda04'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: segunda04";
            }
                    
        }
         if(isset($_POST['segunda05']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['segunda05'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: segunda05";
            }
                    
        }
        if(isset($_POST['segunda06']))
            {
                $com = "SELECT * FROM disciplina WHERE id = ".$_POST['segunda06'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: segunda06";
            }
                    
        }
        
        if(isset($_POST['terca01']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['terca01'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: terca01";
            }
                    
        }
         if(isset($_POST['terca02']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['terca02'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: terca02";
            }
                    
        }
         if(isset($_POST['terca03']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['terca03'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: terca03";
            }
                    
        }
         if(isset($_POST['terca04']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['terca04'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: terca04";
            }
                    
        }
         if(isset($_POST['terca05']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['terca05'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: terca05";
            }
                    
        }
        if(isset($_POST['terca06']))
            {
                $com = "SELECT * FROM disciplina WHERE id = ".$_POST['terca06'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: terca06";
            }
                    
        }
        if(isset($_POST['quarta01']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quarta01'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quarta01";
            }
                    
        }
         if(isset($_POST['quarta02']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quarta02'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quarta02";
            }
                    
        }
         if(isset($_POST['quarta03']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quarta03'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quarta03";
            }
                    
        }
         if(isset($_POST['quarta04']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quarta04'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quarta04";
            }
                    
        }
         if(isset($_POST['quarta05']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quarta05'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quarta05";
            }
                    
        }
        if(isset($_POST['quarta06']))
            {
                $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quarta06'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quarta06";
            }
                    
        }
        
        if(isset($_POST['quinta01']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta01'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta01";
            }
                    
        }
         if(isset($_POST['quinta02']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta02'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta02";
            }
                    
        }
         if(isset($_POST['quinta03']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta03'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta03";
            }
                    
        }
         if(isset($_POST['quinta04']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta04'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta04";
            }
                    
        }
         if(isset($_POST['quinta05']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta05'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta05";
            }
                    
        }
        if(isset($_POST['quinta06']))
            {
                $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta06'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta06";
            }
                    
        }
        
        if(isset($_POST['sexta01']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta01'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta01";
            }
                    
        }
         if(isset($_POST['quinta02']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta02'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta02";
            }
                    
        }
         if(isset($_POST['quinta03']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta03'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta03";
            }
                    
        }
         if(isset($_POST['quinta04']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta04'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta04";
            }
                    
        }
         if(isset($_POST['quinta05']))
        {
            $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta05'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta05";
            }
                    
        }
        if(isset($_POST['quinta06']))
            {
                $com = "SELECT * FROM disciplina WHERE id = ".$_POST['quinta06'];
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
                echo "1 = teorico - 2 = lab ".$rows["tipo_disciplina"];
                echo "<br>";
                echo "quantidade de grupos: ".$rows["qt_grupos"];
                echo "<br>";
                echo "carga horaria: ".$rows['carga_horaria'];
                echo "<br>";
                echo "na coluna: quinta06";
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
