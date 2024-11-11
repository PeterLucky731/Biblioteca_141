<?php

class Devolucao {
    private $conexao;
    private $table = 'devolucao';

    public $id_emprestimo;
    public $id_usuario;
    public $id_livro;

    public function __construct($bd) 
    {
        $this->conexao = $bd;
    }

    public function devolver() 
    {
        $query_usuario = "SELECT id FROM usuario WHERE nome = '{$this->nome_usuario}' LIMIT 1";
        $result_usuario = $this->conexao->query($query_usuario);
        $usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

        $query_livro = "SELECT id FROM livro WHERE titulo = '{$this->titulo_livro}' LIMIT 1";
        $result_livro = $this->conexao->query($query_livro);
        $livro = $result_livro->fetch(PDO::FETCH_ASSOC);

        if (!$usuario || !$livro) {
            return false; 
        }

        $id_usuario = $usuario['id'];
        $id_livro = $livro['id'];

        $query_devolucao = "DELETE FROM {$this->table} WHERE id_usuario = {$id_usuario} AND id_livro = {$id_livro}";
        return $this->conexao->query($query_devolucao);
    }
}