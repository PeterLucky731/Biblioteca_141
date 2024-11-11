<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Usuario</title>
    <link rel="stylesheet" href="cadUsuario.css">
</head>
<body>
    <section>
        <h2>Cadastrar Usuario</h2>
        <form action="../pages/Cadastro_Usuario.php?acao=cadastrar" method="post">
    
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <br><br>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <br><br>
            
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
            <br><br>
            
            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" required>
            <br><br>
            
            <input type="submit" value="Cadastrar Usuario">
        </form>
    </section>
</body>
</html>