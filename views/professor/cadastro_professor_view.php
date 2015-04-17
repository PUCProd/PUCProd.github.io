<!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
            <div class="tabelaSimples">
                <h3>Cadastro de Professores</h3>
            </div>        
          <form action="http://localhost/MVC/professor/add" method="post">
            <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                <tr>   
                  <td>
                      <h5>Nome : </h5> 
                  </td>
                  <td>
                      <input type="text" name="nome">
                  </td>
                </tr>
                <tr>
                    <td>
                        <h5>Apelido : </h5>
                    </td>
                    <td>
                        <input type="text" name="apelido">
                    </td>
                </tr>
                <tr>
                    <td>
                      <h5>Carga Horária : </h5>
                    </td>
                    <td>
                        <input type="number" name="horario">
                    </td>
                </tr>            
            </table>
            <div class="tabelaSimples">
                <br>
                <input class="btn btn-lg btn-primary" value="Salvar" type="submit">                      
            </div>
        </form>        
        <p>
            
        </p>
      </div>