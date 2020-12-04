<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php
require_once 'VerificaAcesso.php';
require_once 'Conexao.php';


$resultado = '';

if(isset($_POST['mespesquisa'])) {
    $mezz = $_POST['mespesquisa'];

    $consultaFormulario = "SELECT * FROM formos WHERE mezz = ?";
    $statement = $mysqli->prepare($consultaFormulario);
    $statement->bind_param("i", $mezz);
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
                
                 <h6 style=" display: inline-block; font-size: 35px; float: right; margin-right: 50px; margin-top: 10px;">M.Oferta</h6><img  style=" display: inline-block; float: right;" src="Logos/admin.png" align="center" class="card-img-top" alt="Card image cap"  width="55">
                 
               
           
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


        <div class="container">
            
            
            <tr>
            <section class="section">
                <form method="POST" >

                    <div class="row" style="display: inline-block; float: left; margin-top: 20px;">
                        <div class="input-field col s9" style=" margin: 0 auto; ">
                            <i class="material-icons prefix"></i>
                            <input  style=" font-size: 13px;  width: 229px;" type="text" id="investimento" name="mespesquisa" placeholder="Informe um mês que deseja consultar." required=""/>
                            <label  style=" font-size: 150%; text-align: center;" for="investimento">Pesquisa por mês</label>
                        </div>
                        <div style="display: inline-block; float: left;">
                            <button class="btn blue"><i class="material-icons">search</i></button>
                        </div>
                    </div>
                </form>
            </section>
            </tr >
            
            <div style="clear: both;">
                
                
            </div>
    
            <?php
            
            if ($resultado == '' ) : ?>
                
                <span>Informe um mês para visualizar os formularios correspondentes.</span>
                
                <?php  else : if (mysqli_num_rows($resultado) > 0):
               

                ?>

                <table class="bordered centered">
                    <thead>
                        <tr>

   

                            

                        </tr>
                    </thead>

                    <tbody>

                     
                        <?php
                        while ($formos = $resultado->fetch_assoc()):
                           


              
                  echo   "<td> <h6>  ID  <br>"  .$formos['codigo'] ."<td><h6>  Formulario  <br>". "<br> Saida: " .$formos['enderecoa']. "</h6></h6> </td>"; 

                    
                            ?>

                  
                <td><a href='Deletar2Oferta.php?codigo=<?php  echo $formos['codigo'] ; ?>'><h5>Excluir</h5></a></td>

              

                            <tr>



                               <br>
  <fieldset style="background-color:  #1E90FF;"> 

  </fieldset>

<br>
          

                        
                               
                             <legend><h5 style="background-color:  #A52A2A; color: #fff;"> 2.CONTAS SAIDA  </h5></legend>


                                      <fieldset>
                           
                                <legend style="font-size:17px;">NOME DA SAIDA DO CAIXA</legend>
                                <h5 style="color: #fff;"><?= $formos['enderecoa'] ?></h5> 

                                      </fieldset>

                                   <br>

                                     <fieldset>
                           
                                <legend style="font-size:17px;">VALOR DA SAIDA DO CAIXA</legend>
                                <h5 style="color: #fff;"><?= $formos['congregacaoa'] ?></h5>
                         
                                    </fieldset>
                                 
                            </tr>



 <!--<form method="POST" action="">
   Primeiro Numero: <input name="pastores" type="int" />
            Segundo numero: <input name="pastores" type="int" /> 
            <input type="submit" value="Somar" />     
    </form> -->


                            <?php
                        endwhile;
//function soma(){
//echo $GLOBALS['pastores'] + $GLOBALS['pastores']; 
//}

//soma();

                       // $igreja = $igreja['id'];
                       //echo $igreja + $igreja;







//$sql = mysql_query("SELECT * FROM igreja  ");
//while($membros = mysql_fetch_array($sql)){
//$id  = $membros['id'];


 //echo $id ;

//}





                        


      //  $pastores = $_POST['pastores'];
      //  $pastores = $_POST['pastores'];
      //  $c = [];
       // if($c == "soma")
           // $c = $pastores + $pastores;
           // echo $c = "resultado";



//AQUI VC SOMA A COLUNA
//$soma = mysql_query("SELECT SUM(pastores) as soma FROM pastores") or die("Erro no comando MySql").mysql_error());

//PARA PRINTAR O VALO DA SOMA

//Fomata valor

//$total = number_format($soma);


//echo "Total das entrada <B>R$ $total</B>";





//if(isset($_POST['ok'])){   $i = mysql_real_escape_string($_POST['igreja']); mysql_select_db($conexao);$soma = "SELECT *, SUM(valor) AS soma FROM pastores, congregacao WHERE igreja = '$i'  GROUP BY tipo";$resultado = mysql_query($soma);while ($total = mysql_fetch_assoc($resultado)) {echo $total['soma'];}}





               // $sql = "Select (pastores + pastores) As Soma From Tabela";
//$execute = mysqli($sql);
//$statement = 1;
//while($res = mysql_fetch_array($execute))
//{
  // echo "Soma #$statement:".  $res['soma']. "<br>";
 //  $statement++;
//} 


                        





                        ?>

<td><a href='Somad.php?codigo=<?php  echo $formos['codigo'] ; ?>'class="btn btn-orange" target="_blank" >LIVRO CAIXA</a></td>

                    </tbody>
                </table>
                <a href="impressao2Saida.php?mezz=<?= $_POST['mespesquisa']?>" class="btn btn-orange" target="_blank"> Imprimir </a>
                <?php
            else:
                ?>
                <span>Não existem formularios cadastrados para o mês informado.</span>
            <?php
            endif;
            endif;
           




            ?>

        </div>

        <!--Scripts-->
        <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>


    </body>
</html>
