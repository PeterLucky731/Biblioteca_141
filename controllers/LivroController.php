<?php

require_once '../config/database.php';
require_once '../models/Livro.php';

class livroController{
    public function cadastrar($titulo, $autor, $genero)
    {
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;

        if($livro->cadastrar())
        {
            $bd->close();
            header('Location: ../pages/Cadastro_Livro.php');
        }else
        {
            echo "Erro ao cadastrar livro";
        }
    }
}

