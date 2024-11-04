<?php

require_once './config/database.php';
require_once './models/Livro.php';

class livroController{
    public function cadastrar($titulo, $autor, $genero, $isbn)
    {
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;
        $isbn->isbn = isbn;

        if($livro->cadastrar())
        {
            $bd->close();
            header('Location: index.php');
        }else
        {
            echo "Erro ao cadastrar livro";
        }
    }
}

