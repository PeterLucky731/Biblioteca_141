<?php

require_once '../config/database.php';
require_once '../models/Livro.php';

class livroController{
  
    public function cadastrar($titulo, $autor, $genero, $isbn, $descricao)
    {
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero; 
        $livro->isbn = $isbn; 
        $livro->descricao = $descricao; 
        $livro->statusLivro = 'disponível';

        if($livro->cadastrar())
        {
            $bd->close();
            header('Location: ../pages/Cadastro_Livro.php');
        }else
        {
            echo "Erro ao cadastrar livro";
        }
    }
  
    public function consultar($criterio, $valor) {
        $database = new Banco();
        $bd = $database->conectar();
        $livro = new Livro($bd);
        
        $resultados = $livro->consultar($criterio, $valor);
        
        // Exibir resultados
        if (count($resultados) > 0) {
            foreach ($resultados as $livro) {
                echo "ID: " . $livro['id'] . " | Título: " . $livro['titulo'] . " | Autor: " . $livro['autor'] . " | ISBN: " . $livro['isbn'] . " | Gênero: " . $livro['genero'] . "<br>";
            }
        } else {
            echo "Nenhum livro encontrado com o critério: '$criterio' = '$valor'.<br>";
        }
    
        $bd->close();
    }

    public function atualizar($id, $titulo, $autor, $genero) {
        $database = new Banco();
        $bd = $database->conectar();
    
        $livro = new Livro($bd);
        $livro->id = $id;
    
        if (!$livro->existe()) {
            echo "Livro não axado";
            return;
        }
    
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;
    
        if ($livro->atualizar()) {
            echo "Livro atualizado com sucesso :D";
        } else {
            echo "Erro ao atualizar o livro :(";
        }
    
        $bd->close();
    }

     public function deletar($id) {

            $database = new Banco();
            $bd = $database->conectar();
    
            $livro = new Livro($bd);
            $livro->id = $id;
      

            if (!$livro->deletar()) {
                echo "Erro: Não é possível excluir este livro, ele está emprestado.!";
            } else {
                echo "livro excluído";
            }
    
            $bd->close();
        }

}

