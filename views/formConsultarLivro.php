<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Consultar Livro</title>
        </head>
        <body>
            <section>
                <h2>Consultar Livro</h2>
                <form action="Consultar_Livro.php?acao=consultar" method="post">
                    <label for="criterio">Critério de Busca:</label>
                    <select name="criterio" id="criterio" required>
                        <option value="titulo">Titulo</option>
                        <option value="autor">Autor</option>
                        <option value="isbn">ISBN</option>
                        <option value="genero">Genero</option>
                    </select>
                    <br><br>
    
                    <label for="valor">Valor:</label>
                    <input type="text" name="valor" id="valor" required>
                    <br><br>
    
                    <input type="submit" value="Consultar">
                </form>
            </section>
        </body>
        </html>