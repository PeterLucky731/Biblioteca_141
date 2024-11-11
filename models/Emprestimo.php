<?php

class Emprestimo {
    private $conexao;
    private $table = 'emprestimo';

    public $id;
    public $data_emprestimo;
    public $email;
    public $titulo;

    public function __construct($bd) {
        $this->conexao = $bd;
    }

    public function registrar() {
        // Verifica se o usuário existe
        $query_usuario = "SELECT id FROM usuario WHERE email = ?";
        $stmt_usuario = $this->conexao->prepare($query_usuario);
        $stmt_usuario->bind_param("s", $this->email);
        $stmt_usuario->execute();
        $resultado_usuario = $stmt_usuario->get_result();
        
        if ($resultado_usuario->num_rows === 0) {
            echo "Usuário não encontrado.";
            return false;
        }
        
        $usuario = $resultado_usuario->fetch_assoc();
        $id_usuario = $usuario['id']; // Alterado para id_usuario

        // Verifica se o livro existe
        $query_livro = "SELECT id FROM livro WHERE titulo = ?";
        $stmt_livro = $this->conexao->prepare($query_livro);
        $stmt_livro->bind_param("s", $this->titulo);
        $stmt_livro->execute();
        $resultado_livro = $stmt_livro->get_result();
        
        if ($resultado_livro->num_rows === 0) {
            echo "Livro não encontrado.";
            return false;
        }
        
        $livro = $resultado_livro->fetch_assoc();
        $id_livro = $livro['id']; // Alterado para id_livro

        // Insere o registro de empréstimo
        $query = "INSERT INTO {$this->table} (data_emprestimo, id_usuario, id_livro) 
                  VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("sii", $this->data_emprestimo, $id_usuario, $id_livro);
        
        if ($stmt->execute()) {
            return true;
        } else {
            echo "Erro ao registrar empréstimo: " . $stmt->error;
            return false;
        }
    }
}