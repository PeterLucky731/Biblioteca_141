<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section id="sec-form">
    <form id="box-form" action="index.php?acao=cadastrar" method="post">
        <label for="titulo">Titulo do Livro</label>
        <input type="text" name="titulo" id="titulo">
    
        <label for="autor">Autor do Livro</label>
        <input type="text" name="autor" id="autor">
    
        <label for="genero">Genero do Livro</label>
        <input type="text" name="genero" id="genero">
    
        <input type="submit" value="Cadastrar Livro">
    </form>
    </section>
    
</body>
</html>