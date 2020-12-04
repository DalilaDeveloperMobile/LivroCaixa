<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php
require_once 'VerificaAcesso.php';
require_once 'Conexao.php';


$resultado = '';

if(isset($_GET['mese'])) {
    $mese = $_GET['mese'];

    $consultaFormulario = "SELECT * FROM formoferta WHERE mese = ?";
    $statement = $mysqli->prepare($consultaFormulario);
    $statement->bind_param("i", $mese);
    $statement->execute();

    $resultado = $statement->get_result();
}
?>

<!DOCTYPE html>
<html lang="pr-br" >
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
    <body onload="print();">
        

        <div class="container">
            
            <?php
            
            if ($resultado == '' ) : ?>
                
                <span>Informe um mês para visualizar os formularios correspondentes.</span>
                
                <?php  else : if (mysqli_num_rows($resultado) > 0):
                ?>
                


                <table class="bordered centered" border="2">
                    <thead>
                        <tr>
                             
                      <center><img src="Logos/livrocaixa.png" align="center" class="card-img-top" alt="Card image cap"  width="200"></center>

                   

                    <center> <h3> FORMULÁRIOS DO LIVRO CAIXA OFERTA</h3> </center> 



                      <br> 

                            

                       

                            
                             
                            
                            
                            
                         
                            


                        </tr>




                    </thead>
  

                    <tbody>
                        <?php
                        while ($formoferta = $resultado->fetch_assoc()):
                            ?>
                            <tr>
                               <br>
  <fieldset> 

  </fieldset>

<br>
                  
                                   <legend> 1.CONTAS ENTRADA </legend>
                                  
                                  <br>
                                  
                                   <fieldset>
                                    
                                 <legend>NOME DA ENTRADA DO CAIXA</legend>

                                <?= $formoferta['responsaa'] ?>

                               </fieldset>
                                
                                
                                  <br>
                                  
                                   <fieldset>
                                 <legend>VALOR DA ENTRADA DO CAIXA</legend>

                                <?= $formoferta['pastoresa'] ?>

                               </fieldset>
                               
                               <br>

                               

                           
       <fieldset>                        
       
       </fieldset>
       
       <br>

</tr>


                            <?php
                        endwhile;
                        ?>

                    </tbody>
                </table>
                
                <?php
            else:
                ?>
                <span>Não existem formulários cadastrados para o mês informado.</span>
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
