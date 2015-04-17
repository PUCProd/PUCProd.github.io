      <?php require_once'controllers/disciplina.php';?> 
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
          
          <div> <!-- Div das informações do banco de dados -->   
              <div class="tabelaSimples"> <!-- Div do filtro e botão cadastrar -->                     
                        <form method="post" action="<?php echo HOME;?>disciplina/filtrar">
                            <h2>
                                <input type="text" size="30" name="filtrar" 
                                       placeholder="&nbsp;Pesquisar" id="bSite" 
                                       onfocus="EmptyField(this.id)"> 
                            </h2>                            
                        </form>                        
                </div>
              <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                                   
                <tr>
                    <td>
                        <h4>Disciplina</h4>
                    </td>
                    
                    <td>
                        <h4>Sigla</h4>
                    </td>
                    
                    <td>
                        <h4>Período(s)</h4>
                    </td>
                    
                    <td>
                        <h4>Qt. Aula(s)</h4>
                    </td>        
                    
                    <td>
                        <h4>Tipo Disc.</h4>
                    </td>        
                    
                    <td>
                        <h4>Qt. Grupo(s)</h4>
                    </td>
                    <td>
                        <h4>Excluir</h4>
                    </td>
                </tr>
                <?php 
                $dis = Disciplina::getListaNome();
                while($row = mysql_fetch_array($dis))
                {
                ?>
                <tr>
                    <td>
                        <h5>
                            <a href='' title='.$nome.'>
                                <?php echo $row["nome"]; ?>
                            </a>
                        </h5>
                    </td>
                    
                    <td>
                        <h5>
                           <?php echo $row["apelido"]; ?>
                        </h5>
                    </td>

                    <td>
                        <h5>
                            <?php $row['periodo']; ?>
                        </h5>
                    </td>

                    <td>
                        <h5>
                            <?php echo $row['carga_horaria']; ?>
                        </h5>
                    </td>

                    <td>
                        <h5>
                            <?php echo $row['tipo_disciplina']; ?>
                        </h5>
                    </td>

                    <td>
                        <h5>
                            <?php echo $row['qt_grupos']; ?>
                        </h5>
                    </td>

                    <td>
                        <a href="<?php echo HOME . 'disciplina/excluir/'.$row['id'];?>" class='btn botao-excluir-config  botao-excluir'>
                            ✘
                        </a>
                    </td>
                </tr>
                
                <?php
                }
                ?>

              </table>
              
          </div>
      </div>