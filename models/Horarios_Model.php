<?php

class Horarios_Model extends Model {

    function __construct() {
        parent::__construct();
        
    }
    
    function add()
    {
        
      
        parent::dropTable();
        parent::criarTabelaHorarios();
        echo 'Insert implementado!... Ainda precisa de voltar manualmente...';
        $colunas = array("segunda0","terca0","quarta0","quinta0","sexta0");
        
        
        for($periodo = 1; $periodo <= 10; $periodo++)
        {
            $insert="(";
            $col[0] = array("seg_0","ter_0","qua_0","qui_0","sex_0");
            $col[1] = array("seg_0","ter_0","qua_0","qui_0","sex_0");
            $col[2] = array("seg_0","ter_0","qua_0","qui_0","sex_0");
            $col[3] = array("seg_0","ter_0","qua_0","qui_0","sex_0");
            $col[4] = array("seg_0","ter_0","qua_0","qui_0","sex_0");
            $col[5] = array("seg_0","ter_0","qua_0","qui_0","sex_0");
            
            for($coluna = 1; $coluna <=6; $coluna++)
            {
                
                for($grupo = 0; $grupo <= 4; $grupo++)
                {
                    
                    for($linha = 0; $linha < 5; $linha++)
                    {
                            $jafoi = false;
                        $string = $colunas[$linha].$coluna."|".$periodo."|".$grupo;
                       
                    if(isset($_POST[$string]))
                    {
                       
                        $com = "SELECT * FROM disciplina WHERE id = ".$_POST[$string];
                        $row = mysql_query($com);

                        while($rows = mysql_fetch_array($row))
                        {
                            if(!$jafoi)
                            {                           
                                if(strlen($col[$coluna-1][$linha]) < 6){
                                     $col[$coluna-1][$linha] = $col[$coluna-1][$linha].$coluna;
                                }
                                //$jafoi = true;
                            } 
                            $id[$grupo][] = $rows["id"];
                  //          echo "<br><br><h4>".$col[$coluna-1][$linha]."</h4><br>";
                            
                        /*    echo "id da disciplina: ".$rows["id"];
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
                            echo "na coluna: ".$colunas[$linha].$coluna;*/
   
                        }
                       $grupos[$grupo][] = $col[$coluna-1][$linha];
                    //   echo"<br/><br/>";
                     //  print_r($grupos);
                    }
                    
                    }
                }
            }
            $column = "(";
            if(isset($id))
            {
                for($controle = 0; $controle < sizeof($id); $controle++)
                {
                        $insert = $insert.$id[$controle].",";
                }
                $insert[strlen($insert)-1] = ")";
                for($coluna = 0; $coluna < 6; $coluna++)
                {
                    for($linha = 0; $linha < 5; $linha++)
                    {
                        if(strlen($col[$coluna][$linha]) != 6)
                        {
                            unset($col[$coluna][$linha]);
                        }
                        else
                        {
                            $column = $column.$col[$coluna][$linha].","; 
                        }
                    }
                }
                $column[strlen($column)-1] = ")";
                
                for($linha = 0; $linha < sizeof($grupos); $linha++){
                    $teste[$linha] = "(";
                    $ins[$linha] = "(";
                    
                    for($coluna = 0; $coluna < sizeof($grupos[$linha]); $coluna++){
                        $teste[$linha] = $teste[$linha].$grupos[$linha][$coluna].",";
                        $ins[$linha] = $ins[$linha].$id[$linha][$coluna].",";
                    }
                    $teste[$linha][strlen($teste[$linha])-1] = ")"; 
                    $ins[$linha][strlen($ins[$linha])-1] = ")";
                    echo"<br/><br/><br/>";
                    echo $teste[$linha];
                }

                if($periodo == 1)
                {
                   for($conta = 0; $conta < sizeof($teste); $conta++){
                       echo"<br/><br/>INSERT INTO HorarioPrimeiro ".$teste[$conta]." VALUES ".$ins[$conta];
                        if(mysql_query("INSERT INTO HorarioPrimeiro ".$teste[$conta]." VALUES ".$ins[$conta]))
                        {
                            echo "<br> Inserido com sucesso!";   
                        }
                        else
                        {
                            echo "<br> Erro<br> INSERT INTO HorarioPrimeiro ".$teste[$conta]." VALUES ".$ins[$conta];
                        }
                   }
                }
                if($periodo == 2)
                {
                    if(mysql_query("INSERT INTO HorarioSegundo ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioSegundo ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 3)
                {
                    if(mysql_query("INSERT INTO HorarioTerceiro ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioTerceiro ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 4)
                {
                    if(mysql_query("INSERT INTO HorarioQuarto ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioQuarto ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 5)
                {
                    if(mysql_query("INSERT INTO HorarioQuinto ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioQuinto ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 6)
                {
                    if(mysql_query("INSERT INTO HorarioSexto ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioSexto ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 7)
                {
                    if(mysql_query("INSERT INTO HorarioSetimo ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioSetimo ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 8)
                {
                    if(mysql_query("INSERT INTO HorarioOitavo ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioOitavo ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 9)
                {
                    if(mysql_query("INSERT INTO HorarioNono ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioNono ".$column." VALUES ".$insert;
                   }
                }
                if($periodo == 10)
                {
                    if(mysql_query("INSERT INTO HorarioDecimo ".$column." VALUES ".$insert))
                    {
                        echo "<br> Inserido com sucesso!";
                    }
                    else
                   {
                       echo "<br> Erro<br> INSERT INTO HorarioDecimo ".$column." VALUES ".$insert;
                   }
                }
                unset($col);
                unset($id);
                unset($teste);
                unset($ins);
            }
        }
       
   }
   
   function getListaNome($periodo)
   {
       
       if(!isset($periodo))
       {
           return null;
       }
       
       if($periodo == 1)
       {      
           
            $query = mysql_query("SELECT * FROM HorarioPrimeiro");
           return $query;
       }
        if($periodo == 2)
        {
            $query = mysql_query("SELECT * FROM HorarioSegundo");
            return $query;
        }
        if($periodo == 3)
        {
           $query = mysql_query("SELECT * FROM HorarioTerceiro");
           return $query;
        }
        if($periodo == 4)
        {
          $query =  mysql_query("SELECT * FROM HorarioQuarto");
          return $query;
        }
        if($periodo == 5)
        {
          $query =  mysql_query("SELECT * FROM HorarioQuinto");
          return $query;
        }
        if($periodo == 6)
        {
           $query = mysql_query("SELECT * FROM HorarioSexto");
           return $query;
        }
        if($periodo == 7)
        {
          $query =  mysql_query("SELECT * FROM HorarioSetimo");
          return $query;
        }
        if($periodo == 8)
        {
           $query = mysql_query("SELECT * FROM HorarioOitavo");
           return $query;
        }
        if($periodo == 9)
        {
           $query = mysql_query("SELECT * FROM HorarioNono");
           return $query;
        }
        if($periodo == 10)
        {
           $query = mysql_query("SELECT * FROM HorarioDecimo");
           return $query;
        }
   }
   
  /* function excluir($id)
   {
   }
   function filtrar()
   {
   }*/
}
        