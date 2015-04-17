<?php

class Professor_Model extends Model{

    function __construct() {
        parent::__construct();

    }
    function add()
    {
        
        $nome = $_POST["nome"];
        $apelido = $_POST["apelido"];
        $horario = $_POST["horario"];
        
        $erro = 0;
        if(empty($nome) == TRUE){
            echo "Favor digitar o nome. <br>";
            $erro = 1;
        }    
        if(empty($apelido) == TRUE){
            echo "Favor digitar um apelido. <br>";
            $erro = 1;
        }    
        if(empty($horario) == TRUE){
            echo "Favor digitar o horario. <br>";
            $erro = 1;
        }    
        if($erro == 0){
                   if(mysql_query("INSERT INTO professor (id_professor, nome, apelido, "
                    . "carga_horaria) VALUES (0, '$nome', '$apelido', '$horario')"))
                  {
                    //  echo 'Professor '.$nome.' adicionado com sucesso!';
                  }
                  else
                  {
                      echo 'Erro';
                  }
         $pegaUltimoId = mysql_insert_id();//Função que pega o último id inserido na tabela do banco de dados
                  $sql_carga_horaria =  "INSERT INTO organizar_horario (id_org_horario,"
                . "id_professor_FK,"
                . "seg_01, seg_02, seg_03, seg_04,"
                . "seg_05, seg_06, ter_01, ter_02,"
                . "ter_03, ter_04, ter_05, ter_06,"
                . "qua_01,qua_02, qua_03, qua_04,"
                . "qua_05, qua_06, qui_01, qui_02,"
                . "qui_03, qui_04, qui_05, qui_06,"
                . "sex_01, sex_02, sex_03, sex_04,"
                . "sex_05, sex_06) "
                . "VALUES (0, ".$pegaUltimoId.", "
                 . "1,1,1,1,1,1,"
                 . "1,1,1,1,1,1,"
                 . "1,1,1,1,1,1,"
                 . "1,1,1,1,1,1,"
                 . "1,1,1,1,1,1)";
         $resultado_carga_horaria = mysql_query($sql_carga_horaria);
        require_once 'views/professor/redirecionar_cad.php';
        require_once 'views/center.php';
        if($resultado_carga_horaria){
            echo "<br>sucesso!";
        }
        }    
       
       require_once 'views/footer.php';

    }
    function getListaNome()
    {
           $row = mysql_query("SELECT * FROM professor ORDER BY nome ASC"); 
        return $row;
    }
    function getPreferenciaNome($args)
    {
        $id = $args;
        $prof = mysql_query("SELECT * FROM professor WHERE id_professor = ".$id);
        $row = mysql_fetch_array($prof);
        return $row;
    }
    function excluir($id)
    {
        require_once 'views/professor/redirecionar.php';
        require_once 'views/center.php';
             
        $sql = "DELETE FROM professor WHERE id_professor = ".$id;
        $resultado = mysql_query($sql);
                     
        if($resultado){
            echo "Deletado com sucesso";
        }else{
            echo "Error!";
        }
        $sql = "DELETE FROM organizar_horario"
                . " WHERE id_org_horario = ".$id;
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
             $row = mysql_query("SELECT * FROM professor WHERE nome LIKE '%$var%'");
        }
        return $row;
    }
    function getOrganizaHorario($id_professor)
    {
        $result = mysql_query("SELECT * FROM organizar_horario "
                . "WHERE id_org_horario = $id_professor");
        $row = mysql_fetch_array($result);
        return $row;
    }
    function organizaHorario($id_professor)
    {
        if(isset($_POST['segunda01']) || 
               isset($_POST['segunda02']) || 
                isset($_POST['segunda03']) ||
                isset($_POST['segunda04']) ||
                isset($_POST['segunda05']) ||
                isset($_POST['segunda06'])){//Teste se o comboBox foi selecionado 
            $retorno = $this->organizaSegunda($id_professor);
            return $retorno;
        }
        if(isset($_POST['terca01']) || 
               isset($_POST['terca02']) || 
                isset($_POST['terca03']) ||
                isset($_POST['terca04']) ||
                isset($_POST['terca05']) ||
                isset($_POST['terca06'])){//Teste se o comboBox foi selecionado 
            $retorno = $this->organizaTerca($id_professor);
            return $retorno;
        }
        
        if(isset($_POST['quarta01']) || 
               isset($_POST['quarta02']) || 
                isset($_POST['quarta03']) ||
                isset($_POST['quarta04']) ||
                isset($_POST['quarta05']) ||
                isset($_POST['quarta06'])){//Teste se o comboBox foi selecionado 
            $retorno = $this->organizaQuarta($id_professor);
            return $retorno;
        }
        
        if(isset($_POST['quinta01']) || 
               isset($_POST['quinta02']) || 
                isset($_POST['quinta03']) ||
                isset($_POST['quinta04']) ||
                isset($_POST['quinta05']) ||
                isset($_POST['quinta06'])){//Teste se o comboBox foi selecionado 
            $retorno = $this->organizaQuinta($id_professor);
            return $retorno;
        }
        if(isset($_POST['sexta01']) || 
               isset($_POST['sexta02']) || 
                isset($_POST['sexta03']) ||
                isset($_POST['sexta04']) ||
                isset($_POST['sexta05']) ||
                isset($_POST['sexta06'])){//Teste se o comboBox foi selecionado 
            $retorno = $this->organizaSexta($id_professor);
            return $retorno;
        }
    }
    function organizaSegunda($id_professor)
    {
        if(isset($_POST['segunda01']))
        {
            $var = $_POST['segunda01'];
            $col = "seg_01";
        }
        if(isset($_POST['segunda02']))
        {
            $var = $_POST['segunda02'];
            $col = "seg_02";
        }
        if(isset($_POST['segunda03']))
        {
            $var = $_POST['segunda03'];
            $col = "seg_03";
        }
        if(isset($_POST['segunda04']))
        {
            $var = $_POST['segunda04'];
            $col = "seg_04";
        }
        if(isset($_POST['segunda05']))
        {
            $var = $_POST['segunda05'];
            $col = "seg_05";
        } 
        if(isset($_POST['segunda06']))
        {
            $var = $_POST['segunda06'];
            $col = "seg_06";
        }
        unset($_POST);
        
        $this->validaOrg($id_professor);
        
        if($var == 1)
        {                                                                
            $sql = "UPDATE organizar_horario SET ". $col ." = '1' WHERE id_org_horario = $id_professor"; //Alterar o nome do campo a ser SET
            if(mysql_query($sql));
            {
                 return true;
            }
        }else {
            if($var == 2)
            {
                $sql = "UPDATE organizar_horario SET " . $col . " = '2' WHERE id_org_horario = $id_professor"; //Alterar o nome do campo a ser SET
                if(mysql_query($sql))
                {
                    return true;
                }
            }else{
                if($var == 3){
                    $sql = "UPDATE organizar_horario SET " . $col . " = '3' WHERE id_org_horario = $id_professor"; //Alterar o nome do campo a ser SET                                       
                
                    if(mysql_query($sql))
                    {
                        return true;
                    }
                }
            }
        }
        return false;
    }
    function organizaTerca($id_professor)
    {
        if(isset($_POST['terca01']))
        {
            $var = $_POST['terca01'];
            $col = "ter_01";
        }
        if(isset($_POST['terca02']))
        {
            $var = $_POST['terca02'];
            $col = "ter_02";
        }
        if(isset($_POST['terca03']))
        {
            $var = $_POST['terca03'];
            $col = "ter_03";
        }
        if(isset($_POST['terca04']))
        {
            $var = $_POST['terca04'];
            $col = "ter_04";
        }
        if(isset($_POST['terca05']))
        {
            $var = $_POST['terca05'];
            $col = "ter_05";
        } 
        if(isset($_POST['terca06']))
        {
            $var = $_POST['terca06'];
            $col = "ter_06";
        }
        unset($_POST);
        
        $this->validaOrg($id_professor);
        
        if($var == 1)
        {                                                                
            $sql = "UPDATE organizar_horario SET ". $col ." = '1' WHERE id_org_horario = $id_professor"; //Alterar o nome do campo a ser SET
            if(mysql_query($sql));
            {
                 echo "Preferível";
                 return true;
            }
        }else {
            if($var == 2)
            {
                $sql = "UPDATE organizar_horario SET " . $col . " = '2' WHERE id_org_horario = $id_professor"; //Alterar o nome do campo a ser SET
                if(mysql_query($sql))
                {
                    echo "Indiferente";
                    return true;
                }
            }else{
                if($var == 3){
                    $sql = "UPDATE organizar_horario SET " . $col . " = '3' WHERE id_org_horario = $id_professor"; //Alterar o nome do campo a ser SET                                       
                
                    if(mysql_query($sql))
                    {
                        echo "Indisponível";
                        return true;
                    }
                }
            }
        }
        return false;
    }
    function organizaQuarta($id_professor)
    {
       if(isset($_POST['quarta01']))
        {
            $var = $_POST['quarta01'];
            $col = "qua_01";
        }
        if(isset($_POST['quarta02']))
        {
            $var = $_POST['quarta02'];
            $col = "qua_02";
        }
        if(isset($_POST['quarta03']))
        {
            $var = $_POST['quarta03'];
            $col = "qua_03";
        }
        if(isset($_POST['quarta04']))
        {
            $var = $_POST['quarta04'];
            $col = "qua_04";
        }
        if(isset($_POST['quarta05']))
        {
            $var = $_POST['quarta05'];
            $col = "qua_05";
        } 
        if(isset($_POST['quarta06']))
        {
            $var = $_POST['quarta06'];
            $col = "qua_06";
        }
        unset($_POST);
        
        $this->validaOrg($id_professor);
        
        if($var == 1)
        {                                                                
            $sql = "UPDATE organizar_horario SET ". $col ." = '1' WHERE id_org_horario = $id_professor"; //Alquaar o nome do campo a ser SET
            if(mysql_query($sql));
            {
                 return true;
            }
        }else {
            if($var == 2)
            {
                $sql = "UPDATE organizar_horario SET " . $col . " = '2' WHERE id_org_horario = $id_professor"; //Alquaar o nome do campo a ser SET
                if(mysql_query($sql))
                {
                    return true;
                }
            }else{
                if($var == 3){
                    $sql = "UPDATE organizar_horario SET " . $col . " = '3' WHERE id_org_horario = $id_professor"; //Alquaar o nome do campo a ser SET                                       
                
                    if(mysql_query($sql))
                    {
                        return true;
                    }
                }
            }
        }
        return false; 
    }
    function organizaQuinta($id_professor)
    {
        if(isset($_POST['quinta01']))
        {
            $var = $_POST['quinta01'];
            $col = "qui_01";
        }
        if(isset($_POST['quinta02']))
        {
            $var = $_POST['quinta02'];
            $col = "qui_02";
        }
        if(isset($_POST['quinta03']))
        {
            $var = $_POST['quinta03'];
            $col = "qui_03";
        }
        if(isset($_POST['quinta04']))
        {
            $var = $_POST['quinta04'];
            $col = "qui_04";
        }
        if(isset($_POST['quinta05']))
        {
            $var = $_POST['quinta05'];
            $col = "qui_05";
        } 
        if(isset($_POST['quinta06']))
        {
            $var = $_POST['quinta06'];
            $col = "qui_06";
        }
        unset($_POST);
        
        $this->validaOrg($id_professor);
        
        if($var == 1)
        {                                                                
            $sql = "UPDATE organizar_horario SET ". $col ." = '1' WHERE id_org_horario = $id_professor"; //Alquiar o nome do campo a ser SET
            if(mysql_query($sql));
            {
                 return true;
            }
        }else {
            if($var == 2)
            {
                $sql = "UPDATE organizar_horario SET " . $col . " = '2' WHERE id_org_horario = $id_professor"; //Alquiar o nome do campo a ser SET
                if(mysql_query($sql))
                {
                    return true;
                }
            }else{
                if($var == 3){
                    $sql = "UPDATE organizar_horario SET " . $col . " = '3' WHERE id_org_horario = $id_professor"; //Alquiar o nome do campo a ser SET                                       
                
                    if(mysql_query($sql))
                    {
                        return true;
                    }
                }
            }
        }
        return false;
    }
    function organizaSexta($id_professor)
    {
        if(isset($_POST['sexta01']))
        {
            $var = $_POST['sexta01'];
            $col = "sex_01";
        }
        if(isset($_POST['sexta02']))
        {
            $var = $_POST['sexta02'];
            $col = "sex_02";
        }
        if(isset($_POST['sexta03']))
        {
            $var = $_POST['sexta03'];
            $col = "sex_03";
        }
        if(isset($_POST['sexta04']))
        {
            $var = $_POST['sexta04'];
            $col = "sex_04";
        }
        if(isset($_POST['sexta05']))
        {
            $var = $_POST['sexta05'];
            $col = "sex_05";
        } 
        if(isset($_POST['sexta06']))
        {
            $var = $_POST['sexta06'];
            $col = "sex_06";
        }
        unset($_POST);
        
       $this->validaOrg($id_professor);
         
        if($var == 1)
        {                                                                
            $sql = "UPDATE organizar_horario SET ". $col ." = '1' WHERE id_org_horario = $id_professor"; //Alsexar o nome do campo a ser SET
            if(mysql_query($sql));
            {
                 return true;
            }
        }else {
            if($var == 2)
            {
                $sql = "UPDATE organizar_horario SET " . $col . " = '2' WHERE id_org_horario = $id_professor"; //Alsexar o nome do campo a ser SET
                if(mysql_query($sql))
                {
                    return true;
                }
            }else{
                if($var == 3){
                    $sql = "UPDATE organizar_horario SET " . $col . " = '3' WHERE id_org_horario = $id_professor"; //Alsexar o nome do campo a ser SET                                       
                
                    if(mysql_query($sql))
                    {
                        return true;
                    }
                }
            }
        }
        return false;
    }
    function validaOrg($id_professor){
        $result = mysql_query("SELECT * FROM organizar_horario "
                . "WHERE id_org_horario = $id_professor");
        $horasIndisponivel = 0;
        $i = 1;
        $row = mysql_fetch_array($result);
        while($i < 6)
        {
         if($row["seg_0".$i] == 3){ $horasIndisponivel = $horasIndisponivel+1;}
         if($row["ter_0".$i] == 3){ $horasIndisponivel = $horasIndisponivel+1;}
         if($row["qua_0".$i] == 3){ $horasIndisponivel = $horasIndisponivel+1;}
         if($row["qui_0".$i] == 3){ $horasIndisponivel = $horasIndisponivel+1;}
         if($row["sex_0".$i] == 3){ $horasIndisponivel = $horasIndisponivel+1;}
         /** Será utilizado para que não haja menos horários disponíveis do que
          * a carga horária do professor **/
         $i++;
         }
         
         
    }
}
