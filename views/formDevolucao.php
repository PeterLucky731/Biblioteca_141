<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Devolver Livro</title>
            <link rel="stylesheet" href="">
        </head>
        <body>
            <section>
                <h2>Devolver Livro</h2>
                <form action="Devolucao_Livro.php?acao=devolver" method="post">
    
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                    <br><br>

                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" required>
                    <br><br>
    
                    <input type="submit" value="devolver">
                </form>
            </section>
        </body>
        </html>