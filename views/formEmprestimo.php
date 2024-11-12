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
            
            <label for="titulo">Titulo do livro:</label>
            <input type="text" id="titulo" name="titulo" required>
            <br><br>

            <label for="email">Email do usuário:</label>
            <input type="email" id="email" name="email" required>
            <br><br>

            <label for="data_emprestimo">Data de Empréstimo:</label>
            <input type="date" id="data_emprestimo" name="data_emprestimo" required>
            <br><br>

            <input type="submit" value="Registrar Emprestimo">
        </form>
    </section>
</body>
</html>