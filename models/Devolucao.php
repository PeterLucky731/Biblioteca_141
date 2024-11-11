<?php

class Devolucao {
    private $conexao;
    private $table = 'devolucao';

    public $id;
    public $data_devolucao;
    public $id_emprestimo;
    public $id_usuario;
    public $id_livro;

    public function __construct($bd) {
        $this->conexao = $bd;
    }

    public function registrar() {
        $query = "INSERT INTO {$this->table} (data_devolucao, id_emprestimo, id_usuario, id_livro) 
                  VALUES ('{$this->data_devolucao}', '{$this->id_emprestimo}', '{$this->id_usuario}', '{$this->id_livro}')";
        return $this->conexao->query($query);
    }
}