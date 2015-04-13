<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <link rel="icon" href="../../favicon.ico">

    <title>Engenharia de Produção</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- CSS MATHEUS -->
    <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/formatacao.css" type="text/css"></link>

<script type="text/javascript">
        function EmptyField(id){//Script para apagar o campo do filtro ao ser clicado e tirar o que está escrito
            var Fid = document.getElementById(id);
            var TheDefaultValue = Fid.defaultValue;
            var TheValue = Fid.value;

            if(TheDefaultValue === TheValue){
                Fid.value ='';
            }
        }
</script>



<style>
    input[type=text]{     
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #cccccc; 
    border:1px solid #000000;
    width:350px; //Largura do campo de texto
}



input[type=number]{     
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #cccccc; 
    border:1px solid #000000;
    width:50px; //Largura do Campo numerico
}

textarea{
    border: 1px solid #000000;
    background:#cccccc;
    width:150px;
    height:100px;
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;    
}

input[type=text]:hover, textarea:hover{ 
         background: #ffffff; 
         border:1px solid #990000;
}

input[type=number]:hover, textarea:hover{ 
         background: #ffffff; 
         border:1px solid #990000;
}


input[type=submit]{
        //background:#006699;
        color:#ffffff;
}

div#alinhamento{    
    text-align: center;
}

.tabelaAlterada{
    width: 100%;
    border-collapse: collapse;        
}
.tabelaAlterada td{
    padding: 7px; 
    border:#4e95f4 1px solid;
}
.tabelaAlterada tr{
    background: #b8d1f3; 
}
.tabelaAlterada tr:nth-child(odd){
    background-color: #b8d1f3;
}
.tabelaAlterada tr:nth-child(even){
    background-color: #dae5f4;
}

.tabelaAlterada th {
    background: #b5cfd2;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #999999;
}
.tabelaAlterada2 {
    font-family: verdana, arial, sans-serif;
    font-size: 11px;
    color: #333333;
    border-width: 1px;
    border-color: #999999;
    border-collapse: collapse;        
    width: 100%;
    text-align: center;
}
.tabelaAlterada2 th{
    padding:  0px;
    background: #d5e3e4;
    background: -moz-linear-gradient(top, #d5e3e4 0%, #ccdee0 40%, #b3c8cc 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop (0%, #d5e3e4), color-stop(40%, #ccdee0), color-stop(100%, #bc8cc));
    background: -webkit-linear-gradient(top, #d5e3e4 0%, #ccdee0 40%, #b3c8cc 100%);
    background: -o-linear-gradient(top, #d5e3e4 0%, #ccdee0 40%, #b3c8cc 100%);
    background: -ms-linear-gradient(top, #d5e3e4 0%, #ccdee0 40%, #b3c8cc 100%);
    background: linear-gradient(bottom, #d5e3e4 0%, #ccdee0 40%, #b3c8cc 100%);
    border: 1px solid #999999;
}

.tabelaAlterada2 td{
    padding:  0px;
    background: #ebecda;
    background: -moz-linear-gradient(top, #ebecda 0%, #e0e0c6 40%, #ceceb7 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop (0%, #ebecda), color-stop(40%, #e0e0c6), color-stop(100%, #ceceb7));
    background: -webkit-linear-gradient(top, #ebecda 0%, #e0e0c6 40%, #ceceb7 100%);
    background: -o-linear-gradient(top, #ebecda 0%, #e0e0c6 40%, #ceceb7 100%);
    background: -ms-linear-gradient(top, #d5e3e4 0%, #ccdee0 40%, #b3c8cc 100%);
    background: linear-gradient(bottom, #ebecda 0%, #e0e0c6 40%, #ceceb7 100%);
    border: 1px solid #999999;
}

.tabelaAlterada2 th p{
    margin: 0px;
    padding: 8px;
    border-top: 1px solid #eefafc;
    border-bottom: 0px;
    border-left: 1px solid #eefafc;
    border-right: 0px;
    text-align: center;
}

.tabelaAlterada2 td p{
    margin: 0px;
    padding: 8px;
    border-top: 1px solid #fcfdec;
    border-bottom: 0px;
    border-left: 1px solid #fcfdec;
    border-right: 0px;
    text-align: center;
}

.tabelaSimples{
    width: 80%;
    text-align: center;
    margin-left: 10%;
}
.tabelaSimples td{
    border: 1px #ffffff double;
}

.tabelaSimplesHorario{
    width: 100%;        
    text-align: center;
}
.tabelaSimplesHorario td{
    border: 1px #ffffff double;
    width: 10%;
    /*height: 10px;*/
}

.tabelaSimples div{
    /*text-align: center;*/
    margin-left: 5%;  
}

.botao-confirmar{
    background-color: #999999;
    background-attachment: fixed;
    color:#fff;
    border-color:#000000
}
.botao-confirmar-config{
    padding:3px 5px;
    font-size:10px;
    line-height:0.9;
    border-radius:0px
}

.botao-excluir{
    background-color: #999999;
    background-attachment: fixed;
    color:#fff;
    border-color:#000000
}
.botao-excluir-config{
    padding:3px 5px;
    font-size:10px;
    line-height:0.9;
    border-radius:0px
}

.botao-verde{
    background-color: #006600;
    color:#fff;
    border-color:#285e8e
}
.botao-verde-config{
    padding:4px 6px;
    font-size:9px;
    line-height:1.33;
    border-radius:10px
}

.botao-amarelo{
    background-color: #666600;
    color:#fff;
    border-color:#285e8e
}
.botao-amarelo-config{
    padding:4px 6px;
    font-size:9px;
    line-height:1.33;
    border-radius:10px
}

.botao-vermelho{
    background-color: #660000   ;
    color:#fff;
    border-color:#285e8e
}
.botao-vermelho-config{
    padding:4px 6px;
    font-size:9px;
    line-height:1.33;
    border-radius:10px
}

.dados{
    float: left;
    padding: 10px;
    /*margin-left: 2.5%;*/
}
.rectangle_p {
    /*padding:3px;*/
    background: #ffffff;
    height: 100px;  
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 5px;
    margin-right: 5px;

   /*width:100%;*/

    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;

    border: 1px;
    border-style: solid;
    border-color: #808080;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $(".btn1").click(function(){
        $("#list").slideUp();
      });
      $(".btn2").click(function(){
        $("#list").slideDown();
      });
    });
</script>

  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Engenharia de Produção</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo HOME;?>">Engenharia de Produção</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo HOME;?>professor/pageView ">Professores</a></li>
                <li><a href="<?php echo HOME;?>disciplina/pageView">Disciplinas</a></li>
                <li><a href="<?php echo HOME;?>relacao/pageView/prof">Relação Prof/Disc</a></li>
                <li><a href="<?php echo HOME;?>disciplina/organizarDisciplina">Horarios Semestre</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
