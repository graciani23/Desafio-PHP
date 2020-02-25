<?php
    require_once 'conexao.php';
    session_start();

    $consulta = $conexaoDB-> prepare('SELECT * FROM usuarios');

    $resultado = $consulta-> execute();
    $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

    // verificar se o formulário foi enviado
    if(isset($_POST['login'])) {
       // verificar campos preenchidos
       if($_POST['email'] != "" && $_POST['senha'] != "") {
           //verificando se usuário já foi cadastrado
            $usuarioConsulta = $conexaoDB-> prepare('SELECT id FROM usuarios where email = :email and senha = :senha');

            $usuarioExecuta = $usuarioConsulta->execute([
                ":email" => $_POST['email'],
                ":senha" => $_POST['senha'],
            ]);

            $usuario = $usuarioConsulta->fetch(PDO::FETCH_ASSOC);
            if($usuario != "") {
                echo "Usuário cadastrado";
            } else {
                header ('location: createUser.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-dark bg-dark">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">&nbsp;</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav" style="margin-top: 13px">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">&ltDesafio PHP/&gt</a>
                            </li>       
                        </ul>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <main class="container">
        <form method="post" action="" class="config-login" enctype="multpart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="senha">
            </div>
            <div class="form-group">
                <small><a href="createUser.php">Ainda não tenho cadastro</a></small>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Logar</button>
        </form>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
</body>
</html>