<?php

require_once '../config/database.php';
require_once '../models/Livro.php';

class livroController{
    public function cadastrar($titulo, $autor,$isbn, $genero)
    {
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->isbn = $isbn;
        $livro->genero = $genero;
        $isbn->isbn = isbn;

        if($livro->cadastrar())
        {
            $bd->close();
            header('Location: ../pages/Cadastro_Livro.php');
        }
        else {
            echo "Erro ao cadastrar livro";
        }
    }

    public function consultar($campo, $valor) {

        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        $resultados = $livro->consultar($campo, "%$valor%");

        if ($resultados->num_rows > 0) {
            while ($livro = $resultados->fetch_assoc()) {
                echo "ID: " . $livro['id'] . " | Título: " . $livro['titulo'] . " | Autor: " . $livro['autor'] . " | ISBN: " . $livro['isbn'] . "<br>";
            }
        } else {
            echo "Nenhum livro encontrado.";
        }

        $bd->close();
    }


     public function atualizar($id, $titulo, $autor, $isbn, $genero) {

        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->id = $id;

        if (!$livro->existe()) {
            echo "Erro: Livro não encontrado.";
            return;
        }

        if ($livro->isbn != $isbn) {
            echo "Erro: Não é permitido alterar o ISBN.";
            return;
        }

        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;

        if ($livro->atualizar()) {
            echo "Livro atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o livro.";
        }

        $bd->close();
    }

     public function deletar($id) {

            $database = new Banco();
            $bd = $database->conectar();
    
            $livro = new Livro($bd);
    
            if ($livro->isEmprestado($id)) {
                echo "Erro: Não é possível excluir um livro emprestado.";
                return;
            }

            if ($livro->deletar($id)) {
                echo "Livro excluído com sucesso!";
            } else {
                echo "Erro ao excluir o livro.";
            }
    
            $bd->close();
        }
}



