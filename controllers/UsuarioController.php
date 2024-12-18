<?php

require_once '../config/database.php';
require_once '../models/Usuario.php';

class usuarioController {
    public function cadastrar($nome, $email, $senha, $data_nasc) {
        $database = new Banco();
        $bd = $database->conectar();

        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = password_hash($senha, PASSWORD_DEFAULT); // Hash da senha
        $usuario->data_nasc = $data_nasc;

        if ($usuario->cadastrar()) {
            $bd->close();
            header('Location: ../pages/Cadastro_usuario.php');
            exit; 
        } else {
            echo "Erro ao cadastrar usuario";
        } 
    }
}