<?php
require_once '../controllers/LivroController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao) {
    case 'consultar':
        if (isset($_POST['criterio']) && isset($_POST['valor'])) {
            $livroController = new LivroController();
            $livroController->consultar($_POST['criterio'], $_POST['valor']);
        } else {
            echo "Dados do formulário não foram enviados corretamente.";
        }
        break;

    default:
        include '../views/formConsultarLivro.php';
    }