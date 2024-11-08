<?php

require_once './config/database.php';
require_once './models/Login.php';

class loginController{
    public function login($email, $senha)
    {
        $database = new Banco();
        $bd = $database->conectar();

        if($email->login())
        {
            $bd->close();
            header('Location: login.php');
        }else
        {
            echo "Erro ao cadastrar livro";
        }
    }
}