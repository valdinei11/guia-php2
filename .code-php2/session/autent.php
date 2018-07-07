<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['senha'] = $_POST['senha'];

if ($_SESSION['senha'] == "123abc456") {
    header('Location: /session/painel.php');
} else {
    header('Location: /session/index.php');
    exit;
}
