<?php

require_once './config/database.php';
require_once './models/Usuario.php';

class usuarioController{
    public function cadastrar($nome, $email, $senha, $data_nasc){
        $database = new Banco();
        $bd = $database->conectar();

        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = $senha;
        $usuario->data_nasc = $data_nasc;

        if($usuario->cadastrar()){
            $bd->close();
            header('Location: Cadastro_usuario.php');
        }else{
            echo "Erro ao cadastrar usuario";
        }
        
    }
}
