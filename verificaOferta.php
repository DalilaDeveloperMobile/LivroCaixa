<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require_once 'Conexao.php';


$mese = date('m');
$responsaa = $_POST['responsaa'];
$pastoresa = $_POST['pastoresa'];



$sql = "INSERT INTO `formoferta`(`mese`, `responsaa`, `pastoresa`) VALUES ( ?, ?, ?)";

$statement = $mysqli->prepare($sql);
$statement->bind_param("iss", $mese, $responsaa, $pastoresa);
$statement->execute();


echo "<script>"
    . "alert('Formulario cadastrado com sucesso!'); "
    . "window.location.href = 'OfertaEntrada2.php';"
    . "</script>";
    
    
        
?>