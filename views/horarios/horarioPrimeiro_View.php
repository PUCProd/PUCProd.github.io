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
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
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
       <div id="scrollingDiv" class = "jumbotron" style="float:right"
     ondrop="drop(event)" ondragover="allowDrop(event)"> 
    <?php
    $i = 0;
    while($resultado_disc = mysql_fetch_array($disciplina))
    {
        while($i < $resultado_disc["carga_horaria"])
        {
        ?>
    <p><option id="<?php echo $resultado_disc['apelido'];?>" draggable="true" ondragstart="drag(event)" 
    name="<?php echo $resultado_disc['periodo'];?>" class="btn botao-verde-config botao-verde"  
    role="button"  value="<?php echo $resultado_disc['id'];?>">
        <?php echo $resultado_disc['apelido'];?>
    </option></p>
    <?php
        $i++;
        }
        $i = 0;
    }
    ?>
    
    </div>
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
                    <td name="segunda01" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td name="terca01"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td name="quarta01"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td name="quinta01"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td name="sexta01"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                    
                    
                    <tr>
                        <td>
                            <h6>07:00 às 07:50</h6>
                        </td>
                      <td name="segunda02" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td name="terca02"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td name="quarta02"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td name="quinta02"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td name="sexta02"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                     
                    </tr>
                    <!-- Final do TR -->                                            
                    
                    <tr>
                       <td>
                            <h6>07:00 às 07:50</h6>
                        </td>
                      <td name="segunda03" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td name="terca03"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td name="quarta03"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td name="quinta03"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td name="sexta03"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                                       
                    </tr>
                    <!-- Final do TR -->                                                                
                    
                    <tr>
                       <td>
                            <h6>07:00 às 07:50</h6>
                        </td>
                      <td name="segunda04" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td name="terca04"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td name="quarta04"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td name="quinta04"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td name="sexta04"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                 
                    </tr>
                    <!-- Final do TR -->                     
                    
                    <tr>
                       <td>
                           <h6>07:00 às 07:50</h6>
                        </td>
                      <td name="segunda05" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td name="terca05"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td name="quarta05"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td name="quinta05"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td name="sexta05"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">                                                      
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                                                 
                    </tr>
                    <!-- Final do TR -->                                         
                    
                    <tr>
                       <td>
                            <h6>07:00 às 07:50</h6>
                        </td>
                      <td name="segunda06" 
                        ondrop="drop(event)" 
                        ondragover="allowDrop(event)">
                        <br>                                               
                    </td>
                      <!-- Final do TD -->                    
                      
                      <td name="terca06"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td name="quarta06"
                          ondrop="drop(event)" 
                          ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                       <td name="quinta06"
                           ondrop="drop(event)" 
                           ondragover="allowDrop(event)">
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                       <td name="sexta06"
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
