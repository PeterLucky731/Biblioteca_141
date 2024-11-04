<?php

class Banco{
    const host = 'localhost';
    const banco = 'biblioteca_1234';
    const usuario = 'root';
    const senha = '';
    public $conexao;

    public function conectar(){
        $this->conexao = new mysqli(self::host, self::usuario, self::senha, self::banco);
        if(!$this->conexao)
        {
            echo 'erro de conexão';
        }else
        {
            return $this->conexao;
        }
    }
}