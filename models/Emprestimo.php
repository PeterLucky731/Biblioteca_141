<?php

class Emprestimo {
    private $conexao;
    private $table = 'emprestimo';

    public $id;
    public $data_emprestimo;
    public $id_usuario;
    public $id_livro;

    public function __construct($bd) {
        $this->conexao = $bd;
    }

    public function registrar() {
    $query = "INSERT INTO {$this->table} (data_emprestimo, id_usuario, id_livro) 
              VALUES ('{$this->data_emprestimo}', '{$this->id_usuario}', '{$this->id_livro}')";
    
    if ($this->conexao->query($query)) {
        return true;
    } else {
        echo "Erro ao registrar empréstimo: " . $this->conexao->error;
        return false;
        }
    }
}