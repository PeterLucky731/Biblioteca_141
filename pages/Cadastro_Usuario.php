<?php

require_once '../controllers/UsuarioController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'cadastrar':
        $usuarioController = new usuarioController();
        $usuarioController->cadastrar($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['data_nasc']);
        break;
    
    default:
        include '../views/formCadastrarUsuario.php';
}