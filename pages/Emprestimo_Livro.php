<?php

require_once '../controllers/EmprestimoController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao) {
    case 'registrar':
        if (isset($_POST['email']) && isset($_POST['titulo'])) {
            $emprestimoController = new EmprestimoController();
            $emprestimoController->registrarEmprestimo($_POST['email'], $_POST['titulo']);
        } else {
            echo "Dados do formulário não foram enviados corretamente.";
        }
        break;

    default:
        include '../views/formEmprestimo.php';
}