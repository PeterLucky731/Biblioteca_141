<?php

require_once '../controllers/LivroController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'cadastrar':
        $livroController = new LivroController();
        $livroController->cadastrar($_POST['titulo'], $_POST['autor'], $_POST['genero'],$_POST['isbn'],$_POST['descricao']);
        break;
    default:
        include '../views/formCadastrarLivro.php';
}
