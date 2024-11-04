<?php

require "./models/Crud.php";

class Usuario implements Crud
{
    private $conexao;
    private $table = "usuario";

    public $id;
    public $nome;
    public $email;
    public $senha;
    public $data_nasc;

    public function __construct($bd)
    {
        $this->conexao = $bd;
    }

    public function getIdUsuario($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->$id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }

    public function cadastrar()
    {
        $query = "INSERT INTO {$this->table} (nome, email, senha, data_nasc) values ('{$this->nome}','{$this->email}','{$this->senha}','{$this->data_nasc}');";
        return $this->conexao->query($query);
    }
    
}