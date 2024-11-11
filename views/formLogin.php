<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

</head>
<body>
    <h2>Login</h2>
    <form action="Login.php?acao=login" method="post">
        
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br><br>

        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha">
        <br><br>

        <input type="submit" value="Fazer login">

        <p>não possui cadastro?</p>
        <ul> 
            <li><a href="/Biblioteca_141/pages/Cadastro_Usuario.php">Clique Aqui!</a></li>
        </ul>
    </form>
</body>