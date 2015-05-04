<?php 
require_once 'controllers/Professor.php';
require_once 'controllers/Disciplina.php';
require_once 'controllers/Relacao.php';
require_once 'controllers/Horarios.php';
?>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
    var idDisc = document.getElementById(data).getAttribute("value");
    var table = ev.target;  //COLUNA da tabela.
    var disc = document.getElementById(data); //pega o element da disciplina

    var periodo = document.getElementById(data).getAttribute("periodo"); //periodo da disciplina
    var professor = document.getElementById(data).getAttribute("professor");
    if (validate(table,disc))
    {
      ev.target.appendChild(document.getElementById(data));
      if(ev.target.id !== "scrollingDiv")
        createForm(ev.target.id, idDisc,periodo,professor);
    }
    
}
function createForm(id, idDisc,periodo, professor)
{
    var theForm = document.forms["seg01"];
    var input = document.createElement('input');
    
    input.type = 'hidden';
    input.name = id+"|"+periodo;
    input.value = idDisc;
    if (typeof professor !== typeof undefined && professor !== false)
        input.id = id+"|"+periodo+"|"+professor;
    else
        input.id = id+"|"+periodo+"|sem_professor";

    theForm.appendChild(input);
}
function dropSubmit()
{
     document.forms["seg01"].submit();
}
function deleteInput(id)
{
    var theForm = document.forms["seg01"];
    var input = document.getElementById(id);
    theForm.removeChild(input);
    
}
function validate(destiny, disc)
{
    var destinyID = destiny.getAttribute("id");    //pega o ID do destino do elemento;
    var destinyPeriod = destiny.parentNode.parentNode.parentNode.getAttribute("periodo"); //pega o periodo da coluna do destino;
    var destinyChildElementNumber = destiny.childNodes.length; //controle para quantidade de elementos por horario;
    
    var discID = disc.getAttribute("value"); //pega o valor a ser passado para o $_POST;
    var discPeriod = disc.getAttribute("periodo"); //pega o periodo da disciplina
    var discGroups = disc.getAttribute("grupos"); //quantos grupos
    var discProf = disc.getAttribute("professor"); //professor
    
    var origin = disc.parentNode;   //pega a origem do elemento;
    var originID = origin.getAttribute("id");
        
    var removeID = origin.getAttribute("id")+"|"+discPeriod+"|"+discProf;  //monta o ID para remoção;
    
    var cont; // variável contadora;
    
    var stringID; //string que irá formar o ID de todas as aulas no mesmo horário;
    
    if(destiny === origin) //origin e destino são iguais
        return false;
    //checa se o professor dá outra aula no mesmo horário
    
    if(discProf !== "sem_professor")
    {
        for(cont = 1; cont < 11; cont++)
        {
            var element; //quando esse elemento não for undefined, o professor dá aula no mesmo horario.
            if(cont === parseInt(destinyPeriod))      //não funciona caso for dois grupos diferentes com o mesmo prof
                continue;
            
            stringID = destinyID+"|"+cont+"|"+discProf;

            element = document.getElementById(stringID);
            
            if (typeof element !== typeof undefined && element !== false
                    && element !== null)
            {
                alert("Professor já dá aula neste horário!");
                return false;
            }
            

        }
    }
    if(destinyID === "scrollingDiv") //caso tirar da tabela, apenas tirar o o input do formulario;
    {
        deleteInput(removeID);
        return true;
    }
 
    if(discPeriod !== destinyPeriod) //disciplina/tabela periodos diferentes
    {
        alert("Disciplina de outro Período!\n\Período da disciplina: "+discPeriod+"\n\Período da tabela: "+destinyPeriod);
        return false;
    }
    if(destinyChildElementNumber > 0) //caso já haja uma disciplina na mesma posição.
    {
        var index = 0; //controle para percorrer todos os nós, caso haja mais de um.
        if(discGroups === 1) // se a propria disciplina nao tiver mais que um grupo, nao permitir mais de uma disciplina
        {
            alert("Limite de disciplinas atingido para este horário!");
            return false;
        }
        if(discGroups <= destinyChildElementNumber) //caso já tenha atingido o limite de grupos, nao inserir
        {
            alert("Limite de disciplinas atingido para este horário!");
            return false;
        }
        
        while(index < destinyChildElementNumber)
        {
             var element = destiny.childNodes[index];
             var elementGroups = element.getAttribute("grupos");
             //permitirá colocar mais de um nó APENAS quando TODOS os nó filho ter a mesma
             //quantidade de grupos.
             if(elementGroups === discGroups) 
             {
                      index++                             
             }
             else
             {
                alert("Limite de disciplinas atingido para este horário!");
                return false;
             }
            
        }
        if(originID !== "scrollingDiv")
            deleteInput(removeID);
        return true;
    }
    if(originID !== "scrollingDiv")
            deleteInput(removeID);
    return true;
}
</script>
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script>
/*	$().ready(function() {
		var $scrollingDiv = $("#scrollingDiv");
 
		$(window).scroll(function(){			
			$scrollingDiv
				.stop()
				.animate({"marginTop": ($(window).scrollTop() + 0) + "px"}, "slow" );			
		});
	});*/
</script>
<!-- Main component for a primary marketing message or call to action -->
<!--teste-->
<?php $table = Horarios::getListaNome(1);?>
<?php $disciplina = Disciplina::getListaNome();?>
<form action="<?php echo HOME?>Horarios/add/" 
                              method="post"
                              id = "seg01">
                        </form>
<input type="button" onclick = "dropSubmit()" value = "Salvar">
<div class="jumbotron">
    <div><!--Inicializa a tabela dos horários -->     
 
        <br>
            <table class="table table-bordered 
                   table-condensed table-hover table-responsive table-striped"
                   periodo="1">
                <div>
                    <h3 style = "text-align: center">Primeiro Período</h3>
                </div>      
                <tr>
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
                <tr>
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
                             $id = 0;
                             $name = 0;
                             while($resultado_disc = mysql_fetch_array($disciplina))
                             {
                                 if($resultado_disc['periodo'] == 1)
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
                                     while($i < $resultado_disc["carga_horaria"])
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
                                         grupos="<?php echo $resultado_disc['qt_grupos']?>"
                                       >
                                         <?php echo $resultado_disc['apelido'];?>
                                 </div>
                                <?php
                                    $i++;
                                    $id++;
                                    }

                                $i = 0;
                            }
                            }
                            ?>
                            </div>  
                      </td>
                    </tr>                                      
                    <!-- Final do TR -->                    
                    
                    <tr>
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
                    
                    <tr>
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
                    
                    <tr>
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
                    
                    <tr>
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
                    
                    <tr>
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
