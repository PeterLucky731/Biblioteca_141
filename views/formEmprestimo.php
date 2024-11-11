<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Empréstimo</title>
</head>
<body>
    <section>
        <h2>Registrar Empréstimo</h2>
        <form action="../pages/Emprestimo_Livro.php?acao=registrar" method="post">
            
            <label for="livro_id">ID do Livro:</label>
            <input type="number" id="livro_id" name="id_livro" required>
            <br><br>

            <label for="usuario_id">ID do Usuário:</label>
            <input type="number" id="usuario_id" name="id_usuario" required>
            <br><br>

            <label for="data_emprestimo">Data de Empréstimo:</label>
            <input type="date" id="data_emprestimo" name="data_emprestimo" required>
            <br><br>

            <input type="submit" value="Registrar Emprestimo">
        </form>
    </section>
</body>
</html>