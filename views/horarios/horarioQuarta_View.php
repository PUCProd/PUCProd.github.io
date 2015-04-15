    <div><!--Inicializa a tabela dos horários -->             
        <br>
            <table class="table table-bordered 
                   table-condensed table-hover table-responsive table-striped">
                <div class="tabelaSimples">
                    <h3 style = "text-align: center">Quarto Período</h3>
                </div>      
                <tr>
                    <th>
                        <p>Segunda-Feira</p>
                    </th>
                    <th>
                        <p>Terça-Feira</p>
                    </th>
                    <th>
                        <p>Quarta-Feira</p>
                    </th>
                    <th>
                        <p>Quinta-Feira</p>
                    </th>
                    <th>
                        <p>Sexta-Feira</p>
                    </th>
                </tr>
                <tr>
                     <td ondrop="drop(event)" ondragover="allowDrop(event)">
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="segunda01" size="1" onchange="submitSeg01.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="terca01" size="1" onchange="submitTer01.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quarta01" size="1" onchange="submitQua01.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quinta01" size="1" onchange="submitQui01.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                                      
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="sexta01" size="1" onchange="submitSex01.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                    
                    
                    <tr>
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                              
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="segunda02" size="1" onchange="submitSeg02.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->
            
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">    
                          <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="terca02" size="1" onchange="submitTer02.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                              
                          <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quarta02" size="1" onchange="submitQua01.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    

                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                       
                          <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quinta02" size="1" onchange="submitQui01.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                  
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                      
                          <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="sexta02" size="1" onchange="submitSex02.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                    </tr>
                    <!-- Final do TR -->                                            
                    
                    <tr>
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">    
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="segunda03" size="1" onchange="submitSeg03.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                            
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                   
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="terca03" size="1" onchange="submitTer03.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">             
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quarta03" size="1" onchange="submitQua03.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)"> 
                          <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quinta03" size="1" onchange="submitQui03.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                  
                                            
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                     
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="sexta03" size="1" onchange="submitSex03.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                                      
                    </tr>
                    <!-- Final do TR -->                                                                
                    
                    <tr>
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="segunda04" size="1" onchange="submitSeg04.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                            
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="terca04" size="1" onchange="submitTer04.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                                                 
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quarta04" size="1" onchange="submitQua04.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                                                
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quinta04" size="1" onchange="submitQui04.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                  
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">        
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="sexta04" size="1" onchange="submitSex04.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                
                    </tr>
                    <!-- Final do TR -->                     
                    
                    <tr>
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                       
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="segunda05" size="1" onchange="submitSeg05.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                            
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                      
                          <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="terca05" size="1" onchange="submitTer05.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">              
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quarta05" size="1" onchange="submitQua05.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quinta05" size="1" onchange="submitQui05.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                        
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                                             
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="sexta05" size="1" onchange="submitSex05.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                
                    </tr>
                    <!-- Final do TR -->                                         
                    
                    <tr>
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                       
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="segunda06" size="1" onchange="submitSeg06.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                            
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                                                  
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="terca06" size="1" onchange="submitTer06.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    

                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                        
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quarta06" size="1" onchange="submitQua06.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                
                      
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                                      
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="quinta06" size="1" onchange="submitQui06.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                        
                       <td ondrop="drop(event)" ondragover="allowDrop(event)">                 
                        <?php $disciplina = Disciplina::getListaNome();?>
                        <?php //mostrar as disciplinas desse horário?>
                        <form action="" method="post" name="form"> <!--chamar alguma função
                                                                    que irá deixar marcado -->
                            <select name="sexta06" size="1" onchange="submitSex06.submit();">
                                <?php
                                while($resultado_disc = mysql_fetch_array($disciplina)){
                                ?>
                                <option value="<?php echo $resultado_disc['id'];?>">
                                    <?php echo $resultado_disc['nome'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <input class="btn botao-confirmar-config  botao-confirmar" type="submit" value="✔">
                            <!--<input class="btn botao-confirmar-config  botao-confirmar" 
                                   type="hidden" name="id_prof" 
                                   value="">-->
                        </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                                                            
                    </tr>
                    <!-- Final do TR -->                                                             
                    
              </table> <!--Finaliza a tabela -->
          </div>
          <br>        
