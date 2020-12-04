
<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php
require_once 'VerificaAcesso.php';
require_once 'Conexao.php';


$resultado = '';

if(isset($_POST['mespesquisa'])) {
    $mes = $_POST['mespesquisa'];

    $consultaFormulario = "SELECT * FROM formulario WHERE mes = ?";
    $statement = $mysqli->prepare($consultaFormulario);
    $statement->bind_param("i", $mes);
    $statement->execute();

    $resultado = $statement->get_result();


    echo $_SESSION['tipoacesso'];


}

 

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
   
       
       
       
        <style type="text/css"> 

         h6{
         
         color: #fff;

         }

        </style>
   
    </head>
    <body style="background-color:#206961;">
        
        
        <nav class="light-blue lighten-1" role="navigation">
           
                 <!-- Logotipo da AIBRECE
               
 <img src="img/13.png" align="center" class="card-img-top" alt="Card image cap"  width="150">

           -->
                
                 <h6 style=" display: inline-block; font-size: 35px; float: right; margin-right: 50px; margin-top: 10px;">M.Dízimo</h6><img  style=" display: inline-block; float: right;" src="Logos/admin.png" align="center" class="card-img-top" alt="Card image cap"  width="55">
                 
               
           
                    <ul class="right hide-on-med-and-down">
                        
                        
                           <li><a href="Formulario.php" class="btn-large waves-effect waves-light blue"> <img  style="display: inline-block; float: left;" src="Logos/form5.png" width="49"><h6  style="display: inline-block; float: right; font-size:22px;" >Formulário</h6></a></li>
                        

                    <li><a href="FaleConosco.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/faleconosco.png" width="49"><h5 style="display: inline-block; float: left; font-size:22px; ">Fale-Conosco</h5></a></li>

                    <li><a href="Cadastro.php" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/cadastro.png" width="49"><h5 style="display: inline-block; float: left; font-size:22px;">Cadastrar-se</h5></a></li>
                    

                    <li><a href="VerificaAcesso.php?sair=" class="btn-large waves-effect waves-light blue"><img  style="display: inline-block; float: left;" src="Logos/sair.png" width="49"><h5  style="display: inline-block; float: left; font-size:22px;" >Sair</h5></a></li>

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
                     
                      <li><a href="Formulario.php" class="btn-large waves-effect waves-light blue"> <img  style="display: inline-block; float: left;" src="Logos/form5.png" width="50"><h5  style="display: inline-block; float: left;" >Formulário</h5></a></li>
                
                    <li><a href="VerificaAcesso.php?sair=" class="btn-large waves-effect waves-light blue"> <img  style="display: inline-block; float: left;" src="Logos/sair.png" width="50"><h5  style="display: inline-block; float: left;" >Sair</h5></a></li>

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


<br>

<br>

       <a href="DizmoEntradas.php" style="display:  block; box-shadow: 5px -5px 3px #000; width: 200px; height: 130px; margin: 0 auto; border-radius: 20px; " class="btn-large waves-effect waves-light blue">

        <img  style="border-radius: 25px; top: 8px; width: 98px;" src="dizimo.jpg" align="center" class="card-img-top" alt="Card image cap"  width="70">

        <br>

        <h5 style="color: #fff;"> Dízimo Entradas</h5></a>
        
        <br>
        
         <a href="DizmoSaidas.php" style="display:  block; box-shadow: 5px -5px 3px #000; width: 200px; height: 130px; margin: 0 auto; border-radius: 20px; " class="btn-large waves-effect waves-light blue">

        <img  style="border-radius: 25px; top: 8px; width: 98px;" src="dizimo.jpg" align="center" class="card-img-top" alt="Card image cap"  width="70">

        <br>

        <h5 style="color: #fff;">Dízimo Saidas</h5></a>

        <!--Scripts-->
        <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>


    </body>
</html>
