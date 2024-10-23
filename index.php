<?php

if (isset($_SESSION) == false) {
    session_start();
}

require_once './controllers/UsuarioController.php';
$controller = new UsuarioController();

$action = "";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

echo $action;

if ($action == 'logout') {
    session_unset();
}

if (isset($_SESSION['usuario_id'])) {
    header('Location: ./home.php');
    exit;
}

if ($action == 'login') {
    if (isset($_POST['login_email']) && isset($_POST['login_senha'])) {
        $controller->login($_POST);
        exit();
    }
}

if ($action == 'registrar') {
    if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome'])) {
        $controller->insert($_POST);
        exit();
    }
}

header('Location: ./login.php');