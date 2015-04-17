<!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
            <div class="tabelaSimples">
                <h3>Cadastro de Disciplina</h3>
            </div>          
        <form name="formulario_disciplina" method="post" action="<?php echo HOME;?>disciplina/add">
            
            <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
              <tr>
                  <td>
                      <h5>Nome</h5> 
                  </td>
                  <td>
                      <input type="text" name="nome">
                  </td>
              </tr>
              <tr>
                <td><h5>Sigla</h5></td>
                <td><input type="text" name="apelido"></td>
              </tr>
              <tr>
                <td><h5>Período</h5></td>
                <td>
                    <select name="periodo">
                        <option value="1">1º Período </option>
                        <option value="2">2º Período</option>
                        <option value="3">3º Período</option>
                        <option value="4">4º Período</option>
                        <option value="4">5º Período</option>
                        <option value="4">6º Período</option>
                        <option value="4">7º Período</option>
                        <option value="4">8º Período</option>
                        <option value="4">9º Período</option>
                        <option value="4">10º Período</option>
                    </select>                    
                </td>
              </tr>
              <tr>
                  <td><h5>Tipo</h5> </td>
                  <td>
       
                      <input type="radio" name="tipo" class="btn1" checked value="teorico" />Teórico
                      <input type="radio" name="tipo" class="btn2" value="pratico"/>Laboratório

                    <div id="list" style="display: none;">
                        <label>Selecionar grupo desejado</label>
                        <select name="qt_grupo">
                            <option value="1">Grupo 1</option>
                            <option value="2">Grupo 2</option>
                            <option value="3">Grupo 3</option>
                            <option value="4">Grupo 4</option>
                        </select>
                    </div>
              </tr>              
              <tr>
                  <td>
                      <h5>Qt. Aula</h5> 
                  </td>
                  
                  <td>
                    <label>Selecionar</label>
                    <select name="horario">
                        <option value="1">&ensp; 1</option>
                        <option value="2">&ensp; 2</option>
                        <option value="4">&ensp; 4</option>
                        <option value="6">&ensp; 6</option>
                        <option value="8">&ensp; 8</option>
                    </select>
                </td>
              </tr>
            </table>
            
            <center>
                <br>
                <input class="btn btn-lg btn-primary" type="submit" value="Salvar">
            </center>               

        </form>
      </div>

</div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    
</html>