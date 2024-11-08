<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/style.css">
    <title>Document</title>
</head>

<body>
    <section id="sec-form">
    <form id="box-form" action="../pages/Cadastro_Livro.php?acao=cadastrar" method="post">
        <label for="titulo">Titulo do Livro</label>
        <input type="text" name="titulo" id="titulo">
    
        <label for="autor">Autor do Livro</label>
        <input type="text" name="autor" id="autor">
    
        <label for="genero">Genero do Livro</label>
        <input type="text" name="genero" id="genero">

        <label for="isbn">Isbn do Livro</label>
        <input type="text" name="isbn" id="isbn">
    
        <label for="descricao">Descricao:</label>
        <textarea id="descricao" name="descricao" rows="4" cols="50"></textarea>
    
        <input type="submit" value="Cadastrar Livro">
    </form>
    </section>
    
</body>
</html>