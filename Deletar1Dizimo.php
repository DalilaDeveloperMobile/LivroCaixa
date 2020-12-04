<?php

$servidor = 'localhost';
$usuario = 'id13040047_root';
$senha = 'lilasantana';
$banco = 'id13040047_aibrece';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

// receber dados do formulario caso tenha acentuação com utf8_encode
$codi = $_GET['codi'];

// criar a consulta sql_regease

$sql = "DELETE from formdizimo where codi=$codi";

// execultar a consulta

$exec = mysqli_query($mysqli,$sql);

echo "O codigo referente ao clique é:" .$codi;
echo "<br>";
echo "Foi Excluido.";

?>

