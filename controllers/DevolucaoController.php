<?php

require_once '../config/database.php';
require_once '../models/Devolucao.php';

class DevolucaoController {
    
    public function devolverLivro($id_usuario, $id_livro) {
        $database = new Banco();
        $bd = $database->conectar();

        $devolucao = new Devolucao($bd);
        $devolucao->id_emprestimo = $id_emprestimo;
        $devolucao->id_usuario = $id_usuario;
        $devolucao->id_livro = $id_livro;
        $devolucao->data_devolucao = date('Y-m-d');

        if ($devolucao->devolver()) {
            echo "Devolução registrada com sucesso!(MAI BAH É US CODA E DORME CARAIO)";
        } else {
            echo "Erro ao registrar devolução (F PROCE AMIGÃO)";
        }

        $bd->close();
    }
}