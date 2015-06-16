<?php
require_once 'controllers/Professor.php';
require_once 'controllers/Disciplina.php';
require_once 'controllers/Relacao.php';
require_once 'controllers/Horarios.php';
?>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script>
 function fun(idOfElement,col, grupo){
     var element = document.getElementsByName(idOfElement);
     var elem;
     var grupos;
     for(i = 0; i < element.length; i++){
         elem = element[i];   
        
         var id = "scrollingDiv"+elem.getAttribute("periodo");
         if(elem.parentNode.getAttribute("id") === id){  
            if(elem.getAttribute("grupo") === "0")
                grupos = "1";//a
            if(elem.getAttribute("grupo") === "1")
                grupos = "2";
            if(elem.getAttribute("grupo") === "2")
                grupos = "3";
            if(elem.getAttribute("grupo") === "3")
                grupos = "4";
            if(grupos === grupo){
                recoverTable(elem.getAttribute("id"),col);
                break;
            }
        }
     }
 }
</script>
<script>
    function fun2(){
        var a = 0;
        var element = document.getElementById(0);
        while(element !== null){
            var element = document.getElementById(a);
            if(element !== null){
                if(element.getAttribute("grupos") !== "1"){
                    element.setAttribute("class","btn botao-amarelo-config botao-amarelo");
                }
                addScrollingDiv(a.toString(), element.getAttribute("periodo"));
            }
            a++;
        }
        
    }
</script>
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
        if (validate(table, disc))
        {
            ev.target.appendChild(disc);
            if (ev.target.id !== "scrollingDiv"+periodo)
                createForm(ev.target.id, idDisc, periodo, professor, disc);
        }
    }
    function addScrollingDiv(idDisc, period) {
        var id = "scrollingDiv"+period;
        var colunaElemento = document.getElementById(id);
        var periodo = colunaElemento.parentNode.parentNode.parentNode.parentNode.getAttribute("periodo");
        var discElemento = document.getElementById(idDisc);
        colunaElemento.appendChild(discElemento);
    }
    function recoverTable(idDisc, col)
    {
        var linha = col[col.length - 1];
        var i;
        var coluna = "";
        var colunaElemento;
        var discElemento = document.getElementById(idDisc);
        var discPeriodo = discElemento.getAttribute("periodo");
        for (i = 0; i < 3; i++)
        {
            coluna = coluna + col[i];
        }

        if (coluna === "seg")
        {
            coluna = coluna + "unda0" + linha;
        }
        else if (coluna === "ter")
        {
            coluna = coluna + "ca0" + linha;
        }
        else if (coluna === "qua")
        {
            coluna = coluna + "rta0" + linha;
        }
        else if (coluna === "qui")
        {
            coluna = coluna + "nta0" + linha;
        }
        else if (coluna === "sex")
        {
            coluna = coluna + "ta0" + linha;
        }
        discElemento = document.getElementById(idDisc);
        var row = document.getElementById("row" + linha + "\\" + discPeriodo);
        for (var i = 0; i < row.childNodes.length; i++)
        {

            if (row.childNodes[i].id === coluna)
            {
                colunaElemento = row.childNodes[i];
                break;
            }

        }
        colunaElemento.appendChild(discElemento);
        createForm(coluna, discElemento.getAttribute("value"), discElemento.getAttribute("periodo"), discElemento.getAttribute("professor"), discElemento);
    }
    function createForm(id, idDisc, periodo, professor, disc)
    {
        var theForm = document.forms["seg01"];
        var input = document.createElement('input');
        var grupo = disc.getAttribute("grupo");
        input.type = 'hidden';
        input.name = id + "|" + periodo + "|" + grupo;
        input.value = idDisc;
        if (typeof professor !== typeof undefined && professor !== false)
            input.id = id + "|" + periodo + "|" + professor;
        else
            input.id = id + "|" + periodo + "|sem_professor";

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
        var removeID = originID + "|" + discPeriod + "|" + discProf;  //monta o ID para remoção;

        var cont; // variável contadora;

        var stringID; //string que irá formar o ID de todas as aulas no mesmo horário;

        if (destiny === origin) //origin e destino são iguais
            return false;
        //checa se o professor dá outra aula no mesmo horário

        if (discProf !== "sem_prof")
        {
            for (cont = 1; cont < 11; cont++)
            {
                var element; //quando esse elemento não for undefined, o professor dá aula no mesmo horario.
                if (cont === parseInt(destinyPeriod))      //não funciona caso for dois grupos diferentes com o mesmo prof
                    continue;

                stringID = destinyID + "|" + cont + "|" + discProf;

                element = document.getElementById(stringID);
                if (typeof element !== typeof undefined && element !== false
                        && element !== null)
                {
                    alert("Professor já dá aula neste horário!");
                    return false;
                }


            }
        }
        var scroll = "scrollingDiv"+discPeriod;
        if (destinyID === scroll) //caso tirar da tabela, apenas tirar o o input do formulario;
        {
            deleteInput(removeID);
            return true;
        }

        if (discPeriod !== destinyPeriod) //disciplina/tabela periodos diferentes
        {
            alert("Disciplina de outro Período!\n\Período da disciplina: " + discPeriod + "\n\Período da tabela: " + destinyPeriod);
            return false;
        }
        if (destinyChildElementNumber > 0) //caso já haja uma disciplina na mesma posição.
        {
            var index = 0; //controle para percorrer todos os nós, caso haja mais de um.
            if (discGroups === 1) // se a propria disciplina nao tiver mais que um grupo, nao permitir mais de uma disciplina
            {
                alert("Limite de disciplinas atingido para este horário!");
                return false;
            }
            if (discGroups <= destinyChildElementNumber) //caso já tenha atingido o limite de grupos, nao inserir
            {
                alert("Limite de disciplinas atingido para este horário!");
                return false;
            }

            while (index < destinyChildElementNumber)
            {
                var element = destiny.childNodes[index];
                var elementGroups = element.getAttribute("grupos");
                //permitirá colocar mais de um nó APENAS quando TODOS os nó filho ter a mesma
                //quantidade de grupos.
                if (elementGroups === discGroups)
                {
                    index++
                }
                else
                {
                    alert("Limite de disciplinas atingido para este horário!");
                    return false;
                }

            }
            if (originID !== scroll)
                deleteInput(removeID);
            return true;
        }
        if (originID !== scroll)
            deleteInput(removeID);
        return true;
    }
    
</script>

<!-- Main component for a primary marketing message or call to action -->
<!--teste-->
<?php $disciplina = Disciplina::getListaNome(); ?>
<?php
?>
<form action="<?php echo HOME ?>Horarios/add/" 
      method="post"
      id = "seg01">
</form>

<div class="jumbotron">
    <div><!--Inicializa a tabela dos horários -->     

        <br>
        <table class="table table-bordered 
               table-condensed table-hover table-responsive table-striped"
               periodo="1">
            <div>
                <h3 style = "text-align: center">Primeiro Período</h3>
            </div>      
            <tr id = "row0\1">
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
            <tr id = "row1\1">
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
                <td  id="discs" rowspan="6">
                    <div id="scrollingDiv1" ondrop="drop(event)" ondragover="allowDrop(event)"
                         class = "jumbotron" style="" value="scrollingDiv"></div>  
                </td>
            </tr>                                      
            <!-- Final do TR -->                    

            <tr id = "row2\1">
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

            <tr id = "row3\1">
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

            <tr id = "row4\1">
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

            <tr id = "row5\1">
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

            <tr id = "row6\1">
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
    <!-- Teste 2! -->
    <?php
    $var = 0;
    $i = 0;
    $id = 0;
    $nome = 0;
    while ($resultado_disc = mysql_fetch_array($disciplina)) {
        if (strcmp($resultado_disc['periodo'], "1") == 0) {
            $prof = "sem_prof";
            $rel = Relacao::getRelacao(1);
            while ($relacao = mysql_fetch_array($rel)) {
                if ($resultado_disc['id'] == $relacao['id']) {
                    if ($relacao['status'] == 1) {
                        $prof = $relacao['nome'];
                    }
                }
            }
            $table = Horarios::getListaNome(1);
            $conta = 0;
            for ($i = 0; $i < $resultado_disc['carga_horaria']; $i++) {
                for ($j = 0; $j < $resultado_disc['qt_grupos']; $j++) {
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
    $auxId = $id;
    ?>
    <?php
    unset($tabela);
    unset($idArr);
    unset($posicao);
    ?>
    <?php require_once 'views/horarios/horarioSegundo_View.php'; ?>
    <?php require_once 'views/horarios/horarioTerceiro_View.php'; ?>
    <?php require_once 'views/horarios/horarioQuarta_View.php'; ?>
    <?php require_once 'views/horarios/horarioQuinto_View.php'; ?>
    <?php require_once 'views/horarios/horarioSexto_View.php'; ?>
    <?php require_once 'views/horarios/horarioSetimo_View.php'; ?>
    <?php require_once 'views/horarios/horarioOitavo_View.php'; ?>
    <?php require_once 'views/horarios/horarioNono_View.php'; ?>
    <?php require_once 'views/horarios/horarioDecimo_View.php'; ?>

    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script>
  /*  $(document).ready(function(){
        var a = 0;
        var element = document.getElementById(0);
        alert("asd");
        while(element !== null){
            var element = document.getElementById(a);
            if(element !== null){
                if(element.getAttribute("grupos") !== "1"){
                    element.setAttribute("class","btn botao-amarelo-config botao-amarelo");
                }
                addScrollingDiv(a.toString());
            }
            a++;
        }
        
    });*/
    /*	$().ready(function() {
     var $scrollingDiv = $("#scrollingDiv");
     
     $(window).scroll(function(){			
     $scrollingDiv
     .stop()
     .animate({"marginTop": ($(window).scrollTop() + 0) + "px"}, "slow" );			
     });
     });*/
</script>
<?php
    echo "<script>fun2()</script>";
    for($i = 1; $i<=10; $i++){
        $id = 0;
        $table = Horarios::getListaNome($i);
        while ($resultado_horario = mysql_fetch_array($table)){
            $coluna = array("seg_0", "ter_0", "qua_0", "qui_0", "sex_0");
            for ($controle = 0; $controle < 5; $controle++) {
                for ($linha = 1; $linha < 7; $linha++) {
                    if (isset($resultado_horario[$coluna[$controle] . $linha])) {
                            $posicao = $coluna[$controle] . $linha;   
                            $idt = $resultado_horario[$coluna[$controle] . $linha];
                            $grupo = $resultado_horario["id_Primeiro"];
                            echo "<script>fun('$idt','$posicao','$grupo')</script>";
                    }
                }
            }
        }
    }
?>