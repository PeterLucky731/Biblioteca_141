<?php

require_once 'controllers/LoginController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'cadastrar':
        $usuarioController = new usuarioController();
        $usuarioController->cadastrar($_POST['email'], $_POST['senha']);
        break;
    
    default:
        include 'views/formCadastrarUsuario.php';
}