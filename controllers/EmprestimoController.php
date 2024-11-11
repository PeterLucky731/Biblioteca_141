<?php

require_once '../config/database.php';
require_once '../models/Emprestimo.php';

class EmprestimoController {
    
    public function registrarEmprestimo($email, $titulo) 
    {
        $database = new Banco();
        $bd = $database->conectar();

        $emprestimo = new Emprestimo($bd);
        $emprestimo->email = $email;
        $emprestimo->titulo = $titulo;
        $emprestimo->data_emprestimo = date('Y-m-d');

        if ($emprestimo->registrar()) 
        {
            $this->redirecionamentoRegistrado("Empréstimo registrado!", "../index.php"); // Corrigido
        } else 
        {
            $this->redirecionamentoNaoRegistrado("Erro ao registrar", "../pages/Emprestimo_Livro.php");
        }
        $bd->close();
    }

    private function redirecionamentoNaoRegistrado($mensagem, $paginaDestino) {
        $this->exibirMensagem($mensagem, $paginaDestino);
    }

    private function redirecionamentoRegistrado($mensagem, $paginaDestino) 
    {
        $this->exibirMensagem($mensagem, $paginaDestino);
    }

    private function exibirMensagem($mensagem, $paginaDestino) {
        echo "<script>
                alert('$mensagem');
                setTimeout(function() {
                    window.location.href = '$paginaDestino';
                }, 3000);
              </script>";
    }
}