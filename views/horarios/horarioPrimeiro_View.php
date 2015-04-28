<?php 
require_once 'controllers/Professor.php';
require_once 'controllers/Disciplina.php';
require_once 'controllers/Relacao.php';
?>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    var parent = document.getElementById(ev.target.id).parentNode;
    var id = parent.getAttribute("id")
    if( id !== "scrollingDiv")
        deletInput(id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var col = document.getElementById(data).getAttribute("value");
    ev.target.appendChild(document.getElementById(data));
    ///PARA PEGAR O ID DO OBJETO DROPADO
   /* alert("ID: "+document.getElementById(data).getAttribute("value")
           +"\nNome da materia: "+document.getElementById(data).getAttribute("name")
            +"\nSera salvo na coluna: "+ev.target.id
            +"\nBloqueie esses alertas...");*/
        
        createForm(ev.target.id, col);
}
function createForm(id, idDisc)
{
    var discId = idDisc;
    var colId = id;
    var theForm = document.forms["seg01"];
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = id;
    input.value = idDisc;
    input.id = id;
    theForm.appendChild(input);
}
function dropSubmit()
{
     document.forms["seg01"].submit();
}
function deletInput(id)
{
    var theForm = document.forms["seg01"];
    var input = document.getElementById(id);
    theForm.removeChild(input);
    
}
</script>
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script>
	$().ready(function() {
		var $scrollingDiv = $("#scrollingDiv");
 
		$(window).scroll(function(){			
			$scrollingDiv
				.stop()
				.animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "slow" );			
		});
	});
</script>
<!-- Main component for a primary marketing message or call to action -->
<!--teste-->
<?php $disciplina = Disciplina::getListaNome();?>
    <div id="scrollingDiv" ondrop="drop(event)" ondragover="allowDrop(event)"
        class = "jumbotron" style="float:right">
    <?php
    $var = 0;
    $i = 0;
    $id = 0;
    $name = 0;
    while($resultado_disc = mysql_fetch_array($disciplina))
    {
        while($i < $resultado_disc["carga_horaria"])
        {
        ?>
    <option id="<?php echo $id;?>" 
            draggable="true" 
            ondragstart="drag(event)"
            class="btn botao-verde-config botao-verde"  
            role="button"
            value="<?php echo $resultado_disc['id'];?>"
          >
        <?php echo $resultado_disc['apelido'];?>
    </option>
    <br>
    <?php
        $i++;
        $id++;
        }
        $i = 0;
    }
    ?>
    </div>  
<form action="<?php echo HOME?>Horarios/add/" 
                              method="post"
                              id = "seg01">
                        </form>
<input type="button" onclick = "dropSubmit()" value = "Salvar">
<div class="jumbotron" style="float:left;position: absolute">
    
    
    <div style=""><!--Inicializa a tabela dos horários -->     
 
        <br>
            <table class="table table-bordered 
                   table-condensed table-hover table-responsive table-striped">
                <div>
                    <h3 style = "text-align: center">Primeiro Período</h3>
                </div>      
                <tr>
                    <th>
                        <h5>Horario</h5>
                    </th>
                    <th>
                        <h5>Segunda<br>Feira</h5>
                    </th>
                    <th>
                        <h5>Terça<br>Feira</h5>
                    </th>
                    <th>
                        <h5>Quarta<br>Feira</h5>
                    </th>
                    <th>
                        <h5>Quinta<br>Feira</h5>
                    </th>
                    <th>
                        <h5>Sexta<br>Feira</h5>
                    </th>
                </tr>
                <tr>
                    <td>
                        <h6>07:00 às 07:50</h6>
                    </td>
                    <td id="segunda01" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)"
                        id="primeiro">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca01"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta01"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta01"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta01"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                    
                    
                    <tr>
                        <td>
                            <h6>07:50 às 08:40</h6>
                        </td>
                      <td id="segunda02" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca02"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta02"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta02"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta02"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                     
                    </tr>
                    <!-- Final do TR -->                                            
                    
                    <tr>
                       <td>
                            <h6>08:50 às 09:40</h6>
                        </td>
                      <td id="segunda03" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca03"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta03"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta03"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta03"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                                       
                    </tr>
                    <!-- Final do TR -->                                                                
                    
                    <tr>
                       <td>
                            <h6>09:40 às 10:30</h6>
                        </td>
                      <td id="segunda04" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca04"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta04"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta04"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta04"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                 
                    </tr>
                    <!-- Final do TR -->                     
                    
                    <tr>
                       <td>
                           <h6>10:40 às 11:30</h6>
                        </td>
                      <td id="segunda05" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca05"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta05"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta05"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta05"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                 
                    </tr>
                    <!-- Final do TR -->                                         
                    
                    <tr>
                       <td>
                            <h6>11:30 às 12:20</h6>
                        </td>
                      <td id="segunda06" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td id="terca06"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td id="quarta06"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td id="quinta06"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td id="sexta06"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                                                             
                    </tr>
                    <!-- Final do TR -->                                                             
              </table> <!--Finaliza a tabela -->
          </div>
          <br>        

          <?php require_once 'views/horarios/horarioSegundo_View.php';?>
          <?php require_once 'views/horarios/horarioTerceiro_View.php';?>
          <?php require_once 'views/horarios/horarioQuarta_View.php';?>
          <?php require_once 'views/horarios/horarioQuinto_View.php';?>
          <?php require_once 'views/horarios/horarioSexto_View.php';?>
          <?php require_once 'views/horarios/horarioSetimo_View.php';?>
          <?php require_once 'views/horarios/horarioOitavo_View.php';?>
          <?php require_once 'views/horarios/horarioNono_View.php';?>
          <?php require_once 'views/horarios/horarioDecimo_View.php';?>
