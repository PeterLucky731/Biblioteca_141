<?php



class Livro {
    private $conexao;
    private $table = 'livro';

    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $isbn;
    public $genero;
    public $isbn;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdLivro($id){
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }
  
    public function cadastrar(){
        $query = "SELECT COUNT(*) FROM {$this->table} WHERE isbn = '{$this->isbn}'";
        $resultado = $this->conexao->query($query);
        $row = $resultado->fetch_row();

        if ($row[0] > 0) {
            return false;  
        }

        $query = "INSERT INTO {$this->table} (titulo, autor, descricao, isbn, genero, status) 
        VALUES ('{$this->titulo}', '{$this->autor}', '{$this->descricao}', '{$this->isbn}', '{$this->genero}', 'disponivel')";
        return $this->conexao->query($query);  
    }



    public function consultar(){
        $query = "SELECT * FROM {$this->table} WHERE {$criterio} LIKE '%{$valor}%'";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);  
    }


    public function atualizar(){
        $query = "UPDATE {$this->table} SET titulo = '{$this->titulo}', autor = '{$this->autor}', descricao = '{$this->descricao}', genero = '{$this->genero}' WHERE id = {$this->id}";
        return $this->conexao->query($query); 
    }



    public function deletar(){
    $query = "SELECT COUNT(*) FROM emprestimos WHERE livro_id = {$this->id} AND data_devolucao IS NULL";
    $resultado = $this->conexao->query($query);
    $row = $resultado->fetch_row();

    if ($row[0] > 0) {
        return false;  
    }

    $query = "DELETE FROM {$this->table} WHERE id = {$this->id}";
    return $this->conexao->query($query);  
    }

}
