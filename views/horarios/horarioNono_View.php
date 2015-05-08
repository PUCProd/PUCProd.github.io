<?php $disciplina = Disciplina::getListaNome();?>
<div><!--Inicializa a tabela dos horários -->     
 
        <br>
            <table class="table table-bordered 
                   table-condensed table-hover table-responsive table-striped"
                   periodo="9">
                <div>
                    <h3 style = "text-align: center">Nono Período</h3>
                </div>      
                <tr id = "row0\9">
                    <th>
                        <h5>Horario</h5>
                    </th>
                    <th>
                        <h5>SegundaFeira</h5>
                    </th>
                    <th>
                        <h5>TerçaFeira</h5>
                    </th>
                    <th>
                        <h5>QuartaFeira</h5>
                    </th>
                    <th>
                        <h5>QuintaFeira</h5>
                    </th>
                    <th>
                        <h5>SextaFeira</h5>
                    </th>
                    <th>
                    <h5>Disciplinas</h5>
                    </th>
                </tr>
                <tr id = "row1\9">
                    <td>
                        <h6>07:00 às 07:50</h6>
                    </td>
                    <td id="segunda01" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)"
                        ></td>
                      <!-- Final do TD -->                    
                      <td id="terca01"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta01"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta01"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta01"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->
                      <td rowspan="6">
                            <div id="scrollingDiv" ondrop="drop(event)" ondragover="allowDrop(event)"
                             class = "jumbotron" style="" value="scrollingDiv">
                             <?php
                             $var = 0;
                             $i = 0;
                             $name = 0;
                             
                             while($resultado_disc = mysql_fetch_array($disciplina))
                             {
                                 
                                 if(strcmp($resultado_disc['periodo'],"9") == 0)
                                 {
                                     
                                    $prof = "sem_prof";
                                    $rel = Relacao::getRelacao(1);
                                    
                                 while($relacao = mysql_fetch_array($rel))
                                 {
                                     if($resultado_disc['id'] == 
                                             $relacao['id']){
                                         if($relacao['status'] == 1){
                                             $prof = $relacao['nome'];
                                         }
                                     }
                                 }
                                $table = Horarios::getListaNome(9);
                                $conta=0;
                                 while($resultado_horaio = mysql_fetch_array($table))
                                  {
                                        $coluna = array("seg_0","ter_0","qua_0","qui_0","sex_0");
                                        
                                        for($controle = 0; $controle < 5; $controle++)
                                        {
                                            for($linha = 1; $linha < 7; $linha++)
                                            {
                                                
                                                if(isset($resultado_horaio[$coluna[$controle].$linha]))
                                                {
                                                        if($resultado_horaio[$coluna[$controle].$linha] == $resultado_disc['id'])
                                                        {
                                      
                                                            $tabela[] = $resultado_horaio[$coluna[$controle].$linha];
                                                            $posicao[] = $coluna[$controle].$linha;
                                                            $idArr[] = $id+$conta; 
                                                            $conta++;
                                                        }
                                                }

                                            }
                                        }
                                    }
                                    
                                    
                                    while($i < $resultado_disc["carga_horaria"])
                                     {
                                         for($j = 0; $j < $resultado_disc["qt_grupos"]; $j++)
                                         {
                                     ?>
                                         <div id="<?php echo $id;?>" 
                                         draggable="true" 
                                         ondragstart="drag(event)"
                                         class="btn botao-verde-config botao-verde"  
                                         role="button"
                                         value="<?php echo $resultado_disc['id'];?>"
                                         periodo="<?php echo $resultado_disc['periodo'];?>"
                                         professor="<?php echo $prof;?>"
                                         tipo="<?php echo $resultado_disc['tipo_disciplina'];?>"
                                         grupos="<?php echo $resultado_disc['qt_grupos'];?>"
                                         grupo="<?php echo $j;?>"
                                       >
                                         <?php 
                                         if($resultado_disc['qt_grupos'] > 1)
                                         {
                                            echo $resultado_disc['apelido']." G".$j;
                                         }
                                         else
                                         {
                                             echo $resultado_disc['apelido'];
                                         }
                                         ?>
                                 </div>
                                    <?php
                                     
                           
                                        $id++;
                                        }
                                        $i++;
                                        }

                                    $i = 0;
                                    }
                             }
                            ?>
                            </div>  
                      </td>
                    </tr>                                      
                    <!-- Final do TR -->                    
                    
                    <tr id = "row2\9">
                        <td>
                            <h6>07:50 às 08:40</h6>
                        </td>
                      <td id="segunda02" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca02"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta02"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta02"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta02"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                     
                    </tr>
                    <!-- Final do TR -->                                            
                    
                    <tr id = "row3\9">
                       <td>
                            <h6>08:50 às 09:40</h6>
                        </td>
                      <td id="segunda03" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca03"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta03"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta03"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta03"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                                                                       
                    </tr>
                    <!-- Final do TR -->                                                                
                    
                    <tr id = "row4\9">
                       <td>
                            <h6>09:40 às 10:30</h6>
                        </td>
                      <td id="segunda04" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca04"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta04"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta04"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta04"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                                                 
                    </tr>
                    <!-- Final do TR -->                     
                    
                    <tr id = "row5\9">
                       <td>
                           <h6>10:40 às 11:30</h6>
                        </td>
                      <td id="segunda05" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca05"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta05"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta05"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta05"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                                                 
                    </tr>
                    <!-- Final do TR -->                                         
                    
                    <tr id = "row6\9">
                       <td>
                            <h6>11:30 às 12:20</h6>
                        </td>
                      <td id="segunda06" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca06"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta06"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta06"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta06"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)"></td>
                      <!-- Final do TD -->                                                                                                             
                    </tr>
                    <!-- Final do TR -->                                                             
              </table> <!--Finaliza a tabela -->
          </div>
<input type="button" onclick = "dropSubmit()" value = "Salvar Tudo">
    <br>
<?php
if(isset($tabela))
{
    for($i = 0; $i < sizeof($tabela); $i++)
    {
        echo "<script>recoverTable('$idArr[$i]','$posicao[$i]')</script>";
    }
}
unset($tabela);
unset($idArr);
unset($posicao);
?>