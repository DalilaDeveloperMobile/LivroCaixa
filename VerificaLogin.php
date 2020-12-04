<?php
session_start();

require_once 'Conexao.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$tipoacesso = isset($_POST['tipoAcesso']) ? $_POST['tipoAcesso'] : '';

$consultaCadastrados = "SELECT * FROM usuario WHERE email=? AND senha =? AND tipoacesso=?";
$statement = $mysqli->prepare($consultaCadastrados);
$statement->bind_param("sss", $email, $senha, $tipoacesso);
$statement->execute();

$resultado = $statement->get_result();

$usuarioEncontrado = $resultado->fetch_assoc();



if (count($usuarioEncontrado) > 0) {
   $_SESSION['usuario'] = $usuarioEncontrado;

    $pagina = $usuarioEncontrado['tipoacesso'] == 'monitor' ? 'Monitor.php' : 'Formulario.php';
   echo "<script>"
    . "window.location.href = '$pagina';"
    . "</script>";
    
} else {
    
    echo "<script>"
    . "alert('Usuário não cadastrado!'); "
    . "window.location.href = 'Login.php';"
   . "</script>";
}

?>


