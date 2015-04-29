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
.botao-verde{
    background-color: #006600;
    color:#fff;
    border-color:#285e8e;
}
.botao-verde-config{
    padding:4px 6px;
    font-size:9px;
    line-height:1.33;
    border-radius:10px;
}

.botao-amarelo{
    background-color: #666600;
    color:#fff;
    border-color:#285e8e;
}
.botao-amarelo-config{
    padding:4px 6px;
    font-size:9px;
    line-height:1.33;
    border-radius:10px;
}

.botao-vermelho{
    background-color: #660000;
    color:#fff;
    border-color:#285e8e;
}
.botao-vermelho-config{
    padding:4px 6px;
    font-size:9px;
    line-height:1.33;
    border-radius:10px;
}
#scrollingDiv{ 
    overflow: auto;
    height: auto;
    margin: 0px 0px 0px 0px;  
    width: 0px;
    right: 0px;
   // float: right;
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
            <div class="btn-group" role="group">
            <button type="button" class="btn navbar-btn btn-default dropdown-toggle" 
                    data-toggle="dropdown" aria-expanded="false">
                Cadastrar
                <span class="caret"></span>
            </button>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo HOME;?>professor/cadastroView">Professor</a></li>
                  <li><a href="<?php echo HOME;?>disciplina/cadastroView">Disciplina</a></li>
              </ul>
            </div> <!-- grupo de botoes-->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
