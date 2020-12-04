<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php

include("Conexao.php");




//$sql = "SELECT COUNT(igrejafiliada) FROM igreja" ;

//$sql = "SELECT  SUM(pastores), SUM(congregacao) , (SUM(pastores) - SUM(congregacao))  FROM formulario";

$sql = " SELECT  (SELECT  SUM(pastores) from formulario) , (SELECT SUM(congregacao) from formdizimo) , ((SELECT  SUM(pastores) from formulario) - (SELECT SUM(congregacao) FROM formdizimo))  ";

//$sql = "SELECT SUM(congregacao) FROM igreja ";

//$sql = "SELECT SUM(membros) FROM igreja ";

//$sql = "SELECT SUM(membrosc) FROM igreja ";

//$sql = "SELECT SUM(total) FROM igreja ";

//$sql = "SELECT SUM(totalc) FROM igreja ";

//$sql = "SELECT SUM(exclusaoa) FROM igreja ";

//$sql = "SELECT SUM(exclusaob) FROM igreja ";

//$sql = "SELECT SUM(exclusaoc) FROM igreja ";

//$sql = "SELECT SUM(batismos) FROM igreja ";

//$sql = "SELECT SUM(recebidosa) FROM igreja ";

//$sql = "SELECT SUM(recebidosb) FROM igreja ";

//$sql = "SELECT SUM(mensalebd) FROM igreja ";

//$sql = "SELECT SUM(mensalmi) FROM igreja ";

//$sql = "SELECT SUM(valorm) FROM igreja ";

//$sql = "SELECT SUM(contriet) FROM igreja ";

//$sql = "SELECT SUM(msi) FROM igreja ";

//$sql = "SELECT SUM(copsn) FROM igreja ";

//$sql = "SELECT SUM(sustentosbc) FROM igreja ";

//$sql = "SELECT SUM(sustentosbci) FROM igreja ";

//$sql = "SELECT SUM(invermrt) FROM igreja ";

$con = $mysqli->query($sql) or die ($mysqli->error);
$dado = $con->fetch_array();


?>

<html>
<head>
	<meta charset="utf8">
</head>
<body onload="print();">
<table>
                   
                        <tr>
                             
                      <center><img src="Logos/livrocaixa.png" align="center" class="card-img-top" alt="Card image cap"  width="200"></center>

                   

                    <center> <h3>LIVRO CAIXA </h3> </center> 

	<tr >
		
		
	</tr>


	<tr>

<legend><h3>TOTAL DE ENTRADAS E SAIDAS DÍZIMO </h3></legend>

<fieldset>
 <legend><tb > TOTAL DE ENTRADAS</tb></legend>
<tb><?php echo $dado[0]; ?></tb>
</fieldset>
<br>

<fieldset>
	<legend><tb> TOTAL DE SAIDAS </tb></legend>
<tb><?php echo $dado[1]; ?></tb>
      </fieldset>
        <br>
        
        <fieldset>
	<legend><tb> RESULTADOS </tb></legend>
<tb><?php echo $dado[2]; ?></tb>
      </fieldset>
        <br>
        
	</tr>
</table>

 



</body>

</html>