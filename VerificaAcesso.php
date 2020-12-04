<?php
session_start();

$url = $_SERVER['REQUEST_URI'];

if(isset($_GET['sair'])){
    unset($_SESSION['usuario']);
    echo "<script>"
        . "window.location.href = 'Login.php';"
        . "</script>";
} else

if (strpos($url, 'login') + strpos($url, 'Login') > 0) {
    if (isset($_SESSION['usuario'])) {
        $pagina = $_SESSION['usuario']['tipoacesso'] == 'monitor' ? 'Monitor.php' : 'Formulario.php';
        echo "<script>"
        . "window.location.href = '$pagina';"
        . "</script>";
    }
} else

if (strpos($url, 'monitor') + strpos($url, 'Monitor') > 0) {
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipoacesso'] != 'monitor') {

        echo "<script>"
        . "window.location.href = 'Login.php';"
        . "</script>";
        'Formulario.php';
    }
} else


if (strpos($url, 'formulario') + strpos($url, 'Formulario') > 0) {
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipoacesso'] != 'formulario') {

        echo "<script>"
        . "window.location.href = 'Login.php' AND 'Monitor.php';"
        . "</script>";
        'Formulario.php';
    }
}else

if($_SESSION['tipoacesso'] == 'monitor'):
    echo '<script>window.location="Formulario.php"</script>';
endif;

?>


