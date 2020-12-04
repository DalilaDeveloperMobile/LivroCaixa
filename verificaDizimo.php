<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require_once 'Conexao.php';



$mezi = date('m');
$endereco = $_POST['endereco'];
$congregacao = $_POST['congregacao'];



$sql = "INSERT INTO `formdizimo`(`mezi`, `endereco`,`congregacao`) VALUES ( ?, ?, ?)";

$statement = $mysqli->prepare($sql);
$statement->bind_param("iss", $mezi, $endereco, $congregacao);
$statement->execute();


    
    echo "<script>"
    . "alert('Formulario cadastrado com sucesso!'); "
    . "window.location.href = 'DizmoSaida1.php';"
    . "</script>";
    
?>