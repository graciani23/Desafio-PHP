<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header >
        <?php include 'assets/includes/nav.php' ?>
    </header>
    <main class="container">
        <h1>Adicionar Produto</h1>
        <form action="" method="POST">
            <div class="divLabel">
                <div>
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome">
                </div>
                <div>
                    <label for="preco">Preço</label><br>
                    <input type="number" name="preco">
                </div>
            </div>
            <div class="desc">
                <label for="descri">Descrição</label><br>
                <input type="text" name="descri">
            </div>
            <input type="file" name="myFile">
            <button class="btn btn-danger" type="submit">Adicionar</button>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04">Escolher arquivo</label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Botão</button>
                </div>
            </div>

        </form>
    </main>
</body>
</html>