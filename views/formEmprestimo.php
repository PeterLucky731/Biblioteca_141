<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="../views/css/empLivro.css">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Empréstimo</title>
</head>
<body>
    <section id="sec-primeira">
        <section id="sec-form">
            <div id="div-diff">
            <h2>Registrar Empréstimo</h2>
            </div>
        <form action="../pages/Emprestimo_Livro.php?acao=registrar" id="form-box" method="post">
            
            <label class="label-cl" for="titulo"><h2>Titulo do livro:</h2></label>
            <input class="input-cl" type="text" id="titulo" name="titulo" required>
            <br><br>

            <label class="label-cl" for="email"><h2>Email do usuário:</h2></label>
            <input class="input-cl" type="email" id="email" name="email" required>
            <br><br>

            <label class="label-cl" for="data_emprestimo">Data de Empréstimo:</label>
            <input type="date" id="data_emprestimo" name="data_emprestimo" required>
            <br><br>
            
            <input id="reg-input" type="submit" value="Registrar Emprestimo">
            <br><br>


        </form>
        
        <form action="../index.php?acao=menu" method="post">
            <input id="main-input" type="submit" value="Main Menu">
        </form>
        </section>
    </section>
</body>
</html>