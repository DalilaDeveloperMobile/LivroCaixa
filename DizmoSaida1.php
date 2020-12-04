<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>


<?php
require_once 'VerificaAcesso.php';
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Livro Caixa</title>
    
    <link rel="icon" type="imagem/png" href="Logos/logo.png"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  

    <!-- CSS  -->
    <!-- profiler e login  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style=" background-color: #20655d;">
    <nav class="light-blue lighten-1" role="navigation">
       <!-- Logotipo da AIBRECE 

       <img src="img/13.png" align="center" class="card-img-top" alt="Card image cap"  width="150"> -->
       
       
        <h6 style=" display: inline-block; font-size: 35px; float: right; margin-right: 50px; margin-top: 10px; color: #fff;">FD.Saida</h6><img  style=" display: inline-block; float: right; " src="Logos/form5.png" align="center" class="card-img-top" alt="Card image cap"  width="55">

       <ul class="right hide-on-med-and-down">


        <li><a href="FaleConosco.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/faleconosco.png" width="48"><h5 style="display: inline-block; float: left; font-size: 22px;">Fale-Conosco</h5></a></li>

        <li><a href="Cadastro.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/cadastro.png" width="48"><h5 style="display: inline-block; float: left;  font-size: 22px;">Cadastrar-se</h5></a></li>
        
         <li><a href="Monitor.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/admin.png" width="48"><h5 style="display: inline-block; float: left;  font-size: 22px;">Monitor</h5></a></li>

        <li><a href="VerificaAcesso.php?sair=" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/sair.png" width="48"><h5  style="display: inline-block; float: left;  font-size: 22px;" >Sair</h5></a></li>

<!--  
        <div>
            <a href="https://pt-br.facebook.com/AIBRECE-126525984120130/" 
            id="download-button" class="btn-large waves-effect waves-light orange">AIBRECE FACEBOOK</a>
        </div>




        <div>
            <a href="http://rafaellandim.blogspot.com.br/2017/03/aibrece-2017.html" id="download-button" class="btn-large waves-effect waves-light orange">AIBRECE BLOG</a> 
        </div>

 -->




    </ul>


    <ul id="nav-mobile" class="side-nav">
        <li><a href="FaleConosco.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/faleconosco.png" width="50"><h5 style="display: inline-block; float: left; font-size: 22px;">Fale-Conosco</h5></a></li>

        <li><a href="Cadastro.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/cadastro.png" width="50"><h5 style="display: inline-block; float: left;">Cadastrar-se</h5></a></li>
        
        <li><a href="Monitor.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/admin.png" width="50"><h5 style="display: inline-block; float: left;">Monitor</h5></a></li>

        <li><a href="VerificaAcesso.php?sair=" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/sair.png" width="50"><h5  style="display: inline-block; float: left;" >Sair</h5></a></li> 
<!--   

        <div>
            <a href="https://pt-br.facebook.com/AIBRECE-126525984120130/" 
            id="download-button" class="btn-large waves-effect waves-light orange">AIBRECE FACEBOOK</a>
        </div>




        <div>
            <a href="http://rafaellandim.blogspot.com.br/2017/03/aibrece-2017.html" id="download-button" class="btn-large waves-effect waves-light orange">AIBRECE BLOG</a> 
        </div>


-->




    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
</div>
</nav>







<div class="container" style="text-align: center;">

    <form class="col s12" method="POST" action="verificaDizimo.php">

    

    
   
     
      <legend><h5 style="background-color:  #A52A2A; font-size:20px;"> 2.CONTAS SAIDA DÍZIMO</h5></legend>

  <div style="margin-top: 5px;" class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix"></i>
         <h6 style="color: #fff;" style="text-align: center; align-items: center; justify-content: center" for="endereco">NOME DA SAIDA DO CAIXA
        </h6>
        <textarea id="endereco" style="font-size:15px; border-radius: 15px; height: 7px; color:#000; background-color: #fff; margin-bottom: 5px;  margin-top: 20px;  margin: 0 auto; " class="materialize-textarea" name="endereco" required=""></textarea>
        <p style="color: #fff; font-size:15px; text-align: center; align-items: center; justify-content: center;">Digite 09/03/2020 Dízimo Motivo da Retirada Valor 30.00</p>
    </div>
</div>


<div style="margin-top: 5px;" class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix"></i>
         <h6  style="color: #fff;" style=" text-align: center; align-items: center; justify-content: center;" for="congregacao">VALOR DA SAIDA DO CAIXA
        </h6>
        <textarea id="congregacao" style="font-size:15px; border-radius: 15px; height: 7px; color:#000; background-color: #fff; margin-top: 20px; margin-bottom: 5px; margin: 0 auto; " class="materialize-textarea" name="congregacao" required=""></textarea>
        <p style="color: #fff; font-size:15px; text-align: center;">Digite Valor 30.00 Obrigatorio Usar Ponto(.) Não Use Virgola(,) para os Valores</p>
    </div>
</div>










<!--
<input class="btn waves-effect waves-light"  class="material-icons right" type="submit" name="submit" value="Salvar" /> -->
<button class="btn waves-effect waves-light" type="submit">Salvar
    <i class="material-icons right"></i>
</button>




</form>


</div>



<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
  



</body>
</html>
