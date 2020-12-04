<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require_once 'Conexao.php';


$mezz = date('m');
$enderecoa = $_POST['enderecoa'];
$congregacaoa = $_POST['congregacaoa'];


$sql = "INSERT INTO `formos`(`mezz`,`enderecoa`,`congregacaoa`) VALUES (?, ?, ?)";

$statement = $mysqli->prepare($sql);
$statement->bind_param("iss", $mezz, $enderecoa, $congregacaoa);
$statement->execute();


echo "<script>"
    . "alert('Formulario cadastrado com sucesso!'); "
    . "window.location.href = 'OfertaSaida2.php';"
    . "</script>";
    
    
        
?>