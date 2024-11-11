<?php

require_once '../config/database.php';
require_once '../models/Emprestimo.php';

class EmprestimoController {
    
    public function registrarEmprestimo($id_usuario, $id_livro) {
        $database = new Banco();
        $bd = $database->conectar();

        $emprestimo = new Emprestimo($bd);
        $emprestimo->id_usuario = $id_usuario;
        $emprestimo->id_livro = $id_livro;
        $emprestimo->data_emprestimo = date('Y-m-d');

        if ($emprestimo->registrar()) {
            echo "Empréstimo registrado NESSA PORRAAAAAA!";
        } else {
            echo "Erro ao registrar empréstimo(FUDEUUUUUUUUUU)";
        }

        $bd->close();
    }
}