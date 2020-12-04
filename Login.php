<?php

require_once 'VerificaAcesso.php';

?>



<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Livro Caixa</title>

           
        <link rel="shortcut icon" type="image/png" sizes="32x32" href="Logos/logo.png"/>
        
        


        <!-- CSS  -->
        <!-- profiler e login  -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
        
        

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
   <body  style="
background-color: #1c655d;">

          

  

               
 
        <nav width="100%" class="light-blue lighten-1" role="navigation">



            

  <!-- Logotipo da AIBRECE 

   <img src="img/13.png" align="center" class="card-img-top" alt="Card image cap"  width="150">
-->


<h6 style=" display: inline-block; font-size: 35px; float: right; margin-right: 50px; margin-top: 10px; color: #fff;">
Login</h6><img  style=" display: inline-block; float: right; " src="Logos/login.png" align="center" 
class="card-img-top" alt="Card image cap"  width="55">

       
            
                <ul class="right hide-on-med-and-down">








                    <li><a href="FaleConosco.php" class="btn-large waves-effect waves-light blue" ><img  style="display: inline-block; float: left;" src="Logos/faleconosco.png" width="50"><h5 style="display: inline-block; float: left; font-size: 22px;">Fale-Conosco</h5></a></li>

                    <li><a href="Cadastro.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/cadastro.png" width="50"><h5 style="display: inline-block; float: left;">Cadastrar-se</h5></a></li>

               

         






                </ul>


                <ul id="nav-mobile" class="side-nav">
                   
                    <li><a href="FaleConosco.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/faleconosco.png" width="50"><h5 style="display: inline-block; float: left; font-size: 22px;">Fale-Conosco</h5></a></li>
                
                     
                   
                     <li><a href="Cadastro.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/cadastro.png" width="50"><h5 style="display: inline-block; float: left;">Cadastrar-se</h5></a></li>
                






                 </ul>
                
                <a  href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
           
            </div>
        </nav>



      




        <!-- Profile e Login-->

        <div style="margin-top:20px;" class="container">
            <div style=" width:290px; margin: 0 auto;"  class="box">
               
                <form class="col-md-12 col-xs-12 login_control" method="POST" action="VerificaLogin.php" class="ls-form row">

                    <div class="control">
                        <div class="label">Email</div>
                        <input type="email" class="form-control" name="email" placeholder="nome@email.com"/>
                    </div>

                    <div class="control">
                        <div class="label">Senha</div>
                        <input type="password"  class="form-control" name="senha" placeholder="******"/>
                        
                    </div>


                    <div class="control">
                        <label style=" font-size: 150%; color: #000;">Nível de Acesso</label>
                        <select class="browser-default" name="tipoAcesso">
                            
                            <option value="" disabled selected style=" font-size: 150%;">Usuarío</option>
                            <option value="monitor" style=" font-size: 150%;"> Monitor</option> 
                            <option value="formulario" style=" font-size: 150%;">Formulários</option>
                          
                        </select>
                        <div align="center">
                            <button class="btn btn-orange" >LOGIN</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>





        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        

    </body>
</html>
