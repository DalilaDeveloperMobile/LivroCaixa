<?php

require_once 'Conexao.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$tipoacesso = isset($_POST['tipoacesso']) ? $_POST['tipoacesso'] : '';

$consultaCadastrados = "SELECT * FROM usuario WHERE email=?";
$statement = $mysqli->prepare($consultaCadastrados);
$statement->bind_param("s", $email);
$statement->execute();

$resultado = $statement->get_result();
$cadastrados = $resultado->fetch_assoc();


if (count($cadastrados) > 0) {
    echo "<script>"
    . "alert('E-mail já cadastrado, por favor informe um e-mail diferente!'); "
    . "window.location.href = 'Cadastro.php';"
    . "</script>";
    
} else {
    $sql = "INSERT INTO usuario (email, senha, tipoacesso) VALUES (?,?,?)";

    $statement = $mysqli->prepare($sql);
    $statement->bind_param("sss", $email, $senha, $tipoacesso);
    $statement->execute();
    
    echo "<script>"
    . "alert('Cadastro realizado com sucesso!'); "
    . "window.location.href = 'Cadastro.php';"
    . "</script>";
}


?>