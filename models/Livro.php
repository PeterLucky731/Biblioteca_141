<?php

class Livro{
    private $conexao;
    private $table = 'livro';

    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $genero;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdLivro($id){
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }

    public function cadastrarLivro(){
        $query = "INSERT INTO {$this->table} (titulo, autor, genero) values ('{$this->titulo}','{$this->autor}','{$this->genero}');";
        $resultado = $this->conexao->query($query); 
        return $resultado;
    }
}