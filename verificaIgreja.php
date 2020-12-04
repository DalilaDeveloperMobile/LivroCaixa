<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require_once 'Conexao.php';



$mes = date('m');
$responsa = $_POST['responsa'];
$pastores = $_POST['pastores'];




$sql = "INSERT INTO `formulario`(`mes`, `responsa`, `pastores`) VALUES ( ?, ?, ?)";

$statement = $mysqli->prepare($sql);
$statement->bind_param("iss", $mes, $responsa, $pastores);
$statement->execute();


    
    echo "<script>"
    . "alert('Formulario cadastrado com sucesso!'); "
    . "window.location.href = 'DizmoEntrada1.php';"
    . "</script>";
    
?>