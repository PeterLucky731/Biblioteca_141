<?php

require_once '../controllers/DevolucaoController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao) {
    case 'registrar':
        if (isset($_POST['id_usuario']) && isset($_POST['id_livro'])) {
            $devolucaoController = new devolverLivro();
            $devolucaoController->devolverLivro($_POST['id_usuario'], $_POST['id_livro']);
        } else {
            echo "Dados do formulário não foram enviados corretamente.";
        }
        break;

    default:
        include '../views/formDevolucao.php';
}