<?php

$servidor = 'localhost';
$usuario = 'id15540920_root'; 
$senha = '?B~$kuPU?_9KvE[R';
$banco = 'id15540920_aibrece';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

/* Executa uma consulta que pega cinco notícias
$sql = "SELECT * FROM usuario";
$query = $mysqli->query($sql);

print_r($query);
while ($dados = $query->mysqli_fetch_array()) {
    print_r($dados);
}
echo 'Registros encontrados: ' . $query->num_rows;
*/
