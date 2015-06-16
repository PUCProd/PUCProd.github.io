<?php $disciplina = Disciplina::getListaNome(); ?>
<div><!--Inicializa a tabela dos horários -->     
    <br>
    <table class="table table-bordered 
           table-condensed table-hover table-responsive table-striped"
           periodo="6">
        <div>
            <h3 style = "text-align: center">Sexto Período</h3>
        </div>      
        <tr id = "row0\6">
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
        <tr id = "row1\6">
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
                <div id="scrollingDiv6" ondrop="drop(event)" ondragover="allowDrop(event)"
                     class = "jumbotron" style="" value="scrollingDiv">
                         <?php
                         $var = 0;
                         $i = 0;
                         $name = 0;

                         while ($resultado_disc = mysql_fetch_array($disciplina)) {
                             if (strcmp($resultado_disc['periodo'], "6") == 0) {
                                 $prof = "sem_prof";
                                 $rel = Relacao::getRelacao(1);
                                 while ($relacao = mysql_fetch_array($rel)) {
                                     if ($resultado_disc['id'] ==
                                             $relacao['id']) {
                                         if ($relacao['status'] == 1) {
                                             $prof = $relacao['nome'];
                                         }
                                     }
                                 }
                                 $table = Horarios::getListaNome(6);
                                 $conta = 0;

                                 for ($i = 0; $i < $resultado_disc['carga_horaria']; $i++) {
                                     for ($j = 0; $j < $resultado_disc["qt_grupos"]; $j++) {
                                         ?>
                                    <div id="<?php echo $id; ?>" 
                                         draggable="true" 
                                         ondragstart="drag(event)"
                                         class="btn botao-verde-config botao-verde"  
                                         role="button"
                                         value="<?php echo $resultado_disc['id']; ?>"
                                         periodo="<?php echo $resultado_disc['periodo']; ?>"
                                         professor="<?php echo $prof; ?>"
                                         tipo="<?php echo $resultado_disc['tipo_disciplina']; ?>"
                                         grupos="<?php echo $resultado_disc['qt_grupos']; ?>"
                                         grupo="<?php echo $j; ?>"
                                         name="<?php echo $resultado_disc['id']; ?>">
                                             <?php
                                             if ($resultado_disc['qt_grupos'] > 1) {
                                                 echo $resultado_disc['apelido'] . " G" . $j;
                                             } else {
                                                 echo $resultado_disc['apelido'];
                                             }
                                             ?>
                                    </div>
                                    <?php
                                    $id++;
                                }
                            }
                        }
                    }
                    ?>
                </div> 
            </td>
        </tr>                                      
        <!-- Final do TR -->                    

        <tr id = "row2\6">
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

        <tr id = "row3\6">
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

        <tr id = "row4\6">
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

        <tr id = "row5\6">
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

        <tr id = "row6\6">
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
unset($tabela);
unset($idArr);
unset($posicao);
?>