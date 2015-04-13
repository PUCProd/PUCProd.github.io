<?php

class Relacao_Model extends Model{

    function __construct() {
        parent::__construct();
    }
    
    function relacionar() 
    {
        require_once 'views/relacao/redirecionar.php';
        require_once 'views/center.php';
        $id_disc = $_POST['select']; // Seleciona o id da matéria
        $id_prof = $_POST['id_prof']; // Pega o id do professor 
        echo $id_disc;
        echo $id_prof;
        
        $sql_teste_id_professor = "SELECT * FROM relacao";//Filtra o id dos 
                                                      //professores da tabela relação
        $resultado_teste_professor = mysql_query($sql_teste_id_professor);//Executa a Query

        $sql_teste_id_disciplina = "SELECT * FROM relacao";//Filtra o id das disciplinas da tabela relação
        $resultado_teste_disciplina = mysql_query($sql_teste_id_disciplina);//Executa a Query

        $aux_prof = 0;
        $aux_disc = 0;

        while(($row_prof = mysql_fetch_array($resultado_teste_professor)) && 
                ($row_disc = mysql_fetch_array($resultado_teste_disciplina))){
            if($row_prof['FK_id_professor'] == $id_prof){ //Testa se o ID do 
                                                          //professor já foi 
                                                          //adicionado a tabela de 
                                                          //relacao
                    $aux_prof++;                          //em caso afirmativo seta 
                                                          //1 para a variável aux_prof            
                if($row_disc['FK_id_disciplina'] == $id_disc){//testa se o ID da 
                                                              //disciplina já foi
                                                              //adicionado ao banco
                    $aux_disc++;                              //em caso afirmativo 
                                                              //seta 1 para a variável aux_disc                
                }
            }
        }

        if($aux_prof == 0){
    //    echo "n ha prof<br>";
    //        echo "insere no banco";
            $sql_relacao = "INSERT INTO relacao (FK_id_professor, FK_id_disciplina, "
                    . "status) VALUES ('$id_prof', '$id_disc', 1)";//cria Query       
            $resultado_relacao = mysql_query($sql_relacao);//Executa a query            
            if($resultado_relacao){
                echo "Todos os dados adicionados com sucesso!";
            }
        }else{
    //        echo "<br>Prof existe $aux_prof";
            if($aux_disc == 0){
                $sql_relacao = "INSERT INTO relacao (FK_id_professor, "
                        . "FK_id_disciplina, status) VALUES ('$id_prof', "
                        . "'$id_disc', 1)";

                $resultado_relacao = mysql_query($sql_relacao);

                if($resultado_relacao){
                    echo "Disciplina adicionada com sucesso ou a disciplina já "
                    . "foi adicionada!";
                }

            }else{
    //            echo "<br>Disc existe $aux_disc update <br> ";                        
                $sql_relacao = "UPDATE relacao SET status = 1 WHERE FK_id_disciplina = '$id_disc' AND FK_id_professor = '$id_prof'";
                $resultado_relacao = mysql_query($sql_relacao);
                if($resultado_relacao){
                    echo "Disciplina alterada com sucesso!";
                }                
            }
        }
        require_once 'views/footer.php';
    }
    
    function getRelacao($args = false)
    {
        mysql_pconnect(SERVER,USER,PASSWORD);
        mysql_select_db('prod_database');
        if(!$args)
        {
            $relacao = "SELECT p.nome, d.nome, p.id_professor, d.id, "
                                . "r.status FROM relacao r INNER JOIN professor p ON"
                                . " ( r.FK_id_professor = p.id_professor) INNER JOIN"
                                . " disciplina d ON ( r.FK_id_disciplina = d.id)";
        }
        else
        {
         $relacao = "SELECT p.nome, p.id_professor, d.id, r.status FROM relacao r
                                        INNER JOIN professor p ON ( r.FK_id_professor = p.id_professor)
                                        INNER JOIN disciplina d ON ( r.FK_id_disciplina = d.id)";
        }
         $resultado = mysql_query($relacao);

        return $resultado;
       
    }
    
    function excluir()
    {
        require_once 'views/relacao/redirecionar.php';
        require_once 'views/center.php';
        $id_prof = $_POST['id_prof'];
        $id_disc = $_POST['id_disc'];
        
        echo "$id_prof, $id_disc";
        
        $sql = "UPDATE relacao SET status = 0 WHERE FK_id_professor = '$id_prof' AND FK_id_disciplina = '$id_disc'";
        $resultado = mysql_query($sql);
        
        if($resultado){
            echo "Removido com sucesso!";
        }else{
            echo "erro";
        }
        require_once 'views/footer.php';
    }
    
    function filtrar()
    {
        if(isset($_POST['filtrar']))
        {
             $relacao = "SELECT p.nome, d.nome, p.id_professor, d.id, "
                                . "r.status FROM relacao r INNER JOIN professor p ON"
                                . " ( r.FK_id_professor = p.id_professor) INNER JOIN"
                                . " disciplina d ON ( r.FK_id_disciplina = d.id)"
                     . "WHERE p.nome = '%$var%'";
             $row = mysql_query($relacao);
        }
        return $row;
    }
}

