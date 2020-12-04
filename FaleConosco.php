<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Livro Caixa</title>

        <link rel="icon" type="imagem/png" href="Logos/logo.png"/>

        <!-- CSS  -->
        <!-- profiler e login  -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body style="
background-color: #1c655d;">
        <nav class="light-blue lighten-1" role="navigation">
           




            <!-- Logotipo da AIBRECE
               
 <img src="img/13.png" align="center" class="card-img-top" alt="Card image cap"  width="150"> -->

                
                <h6 style=" display: inline-block; font-size: 35px; 
               float: right; margin-right: 10px; margin-top: 10px; color:#fff;">
                Fale-Conosco</h6><img  style=" display: inline-block; float:
              right;" src="Logos/faleconosco.png" align="center" class="card-img-top" 
              alt="Card image cap"  width="55">
                
                <ul class="right hide-on-med-and-down">

                
                  

                    <li><a href="Cadastro.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/cadastro.png" width="50"><h5 style="display: inline-block; float: left;">Cadastrar-se</h5></a></li>

                    <?php if (isset($_SESSION['usuario'])) : ?>
                        <li><a href="VerificaAcesso.php?sair=" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" 
                         src="Logos/sair.png" width="50"><h5  style="display: 
                        inline-block; float: left;" >Sair</h5></a></li>
                        
                        <li><a href="Login.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/login.png" width="50"><h5 style="display: inline-block; float: left;">Login</h5></a></li>
                        
                    <?php else : ?>
                        <li><a href="Login.php?sair=" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/login.png" width="50"><h5 style="display: inline-block; float: left;">Login</h5></a></li>
                    <?php endif; ?>
                    
                    
               

                </ul>


                <ul id="nav-mobile" class="side-nav">
                    <li><a href="Cadastro.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/cadastro.png" width="50"><h5 style="display: inline-block; float: left;">Cadastrar-se</h5></a></li>
                    
                     <?php if (isset($_SESSION['usuario'])) : ?>
                        <li><a href="VerificaAcesso.php?sair=" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" 
                         src="Logos/sair.png" width="50"><h5  style="display: 
                        inline-block; float: left;" >Sair</h5></a></li>
                        
                        <li><a href="Login.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/login.png" width="50"><h5 style="display: inline-block; float: left;">Login</h5></a></li>
                        
                    <?php else : ?>
                        <li><a href="Login.php?sair=" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/login.png" width="50"><h5 style="display: inline-block; float: left;">Login</h5></a></li>
                    <?php endif; ?>
                
                  
               


                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>



    <div id="divCenter" class="card" style="width: 280px; margin: 0 auto; margin-top: 12px;">
        <div class="col-md-12 col-xs-12" align="center">
             <!--   <img src="img/11.jpg" align="center" class="card-img-top" alt="Card image cap">-->
            <div  class="card">
    <img src="img/livrocaixa.png" align="center" class="card-img-top" alt="Card image cap" width="200px">
            


                <div  class="card-block">

                     <h6 style="font-size: 27px; font-family:times; text-align: center; display: inline-block;">Livro Caixa
                    </h6>

                    <h4 style="font-size: 30px; font-family:times; text-align: center; ">FALE-CONOSCO
                  </h4>
                    <h6 style="font-size: 27px; font-family:times; text-align: center; display: inline-block;">E-mail:
                    </h6>
                    <p style="font-size: 20px; font-family:times; text-align: center; display: inline-block;" >dalila.dalila70@gmail.com</p><br>
                    <h6 style="font-size: 27px; font-family:times; text-align: center;display: inline-block;">Zap:</h6>
                    <p style="font-size: 20px; font-family:times; text-align: center; display: inline-block;" >(88) 9.96328189</p>

                    <br><br>
                </div>
            </div>
        </div>







        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

        </body>
        </html>
