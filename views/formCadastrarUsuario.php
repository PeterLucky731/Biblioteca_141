<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela Cadastro</title>
    <link rel="stylesheet" href="cadUsuario.css">
</head>
<body>
<section>

    <form action="Cadastro_Usuario.php?acao=cadastrar" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha">
        
        <label for="data_nasc">Data de Nascimento</label>
        <input type="text" name="data_nasc" id="data_nasc">
        
        <input type="submit" value="Cadastrar Usuario">
    </form>
</section>    
</body>
</html>