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
    public $statusLivro;
    

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
            return false; // ISBN já cadastrado
        }

        $query = "INSERT INTO {$this->table} (titulo, autor, genero, isbn, descricao,statusLivro) 
        VALUES ('{$this->titulo}', '{$this->autor}', '{$this->genero}', '{$this->isbn}', '{$this->descricao}', '{$statusLivro}')";
        return $this->conexao->query($query);  
    }


    public function consultar($criterio, $valor){
        $query = "SELECT * FROM {$this->table} WHERE {$criterio} LIKE '%{$valor}%'";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }


    public function atualizar(){
        $query = "SELECT COUNT(*) FROM {$this->table} WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        $row = $resultado->fetch_row();
    
        if ($row[0] == 0) {
            return false; // Livro não encontrado
        }
        
        $query = "UPDATE {$this->table} SET titulo = '{$this->titulo}', autor = '{$this->autor}', descricao = '{$this->descricao}',     genero = '{$this->genero}' WHERE id = {$this->id}";
        return $this->conexao->query($query); 
    }

        // Verificar se o livro existe
        public function existe() {
            $query = "SELECT COUNT(*) FROM {$this->table} WHERE id = {$this->id}";
            $resultado = $this->conexao->query($query);
            $row = $resultado->fetch_row();
            return $row[0] > 0;
        }


    public function deletar(){
    //verifica se o livro esta emprestado
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
