<?php
     session_start();
     $usuario = $_POST;
 
     // verificar se o formulário foi enviado
     if(isset($_POST['cadastro-usuario'])) {  
         include 'valida-usuario.php';
         $usuarios = file_get_contents('usuarios.json');
         if ($usuarios === false) {
             file_put_contents('usuarios.json', "[]");
         } 
         $usuariosdec = json_decode($usuarios);

         // inclusão id
         $ultimaPosicao = count($usuariosdec) + 1;
         $id = ["id" => 1];
        if (count($usuariosdec) == 0) {
            $result = array_merge($id, $usuario);
        } else {
            $id = ["id" => $ultimaPosicao];
            $result = array_merge($id, $usuario);
        }
         
         $usuariosdec[] = $result;
 
         $inserir = json_encode($usuariosdec);
 
         file_put_contents('usuarios.json', $inserir);
         var_dump($usuariosdec);

     }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Criar Usuário</title>

</head>
<body>
    <header>
        <div class="container">
        <?php include 'assets/includes/navbar.php'; ?>
        </div>
    </header>
        
        <div class="container">
            <div class="row">
                <div class="usuarios col-md-4 border">
                    <h2>Usuários</h2>
                    <ul class="list-group list-group-flush">
                        <?php
                            $usuarios = file_get_contents('usuarios.json');
                            $usuariosdec = json_decode($usuarios, true);
                            foreach ($usuariosdec as $usuario) :
                             
                        ?>
                        <li class="list-group-item">
                            <div class="info">
                                <?php echo $usuario['nome']."</br>";
                                echo $usuario['email']; ?>
                            </div>
                            <div class="botoes">
                                <a href="editUser.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary">Editar</a>
                                <a href="#" class="btn btn-danger">Excluir</a>
                            </div>
                        </li>
                            <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h2>Adicionar Usuário</h2>
                    <form action="" method="post" enctype="multpart/form-data">                      
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input name="nome" id="nome" type="text" class="form-control">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                                             
                        <div class="form-group">
                            <label for="senha">Senha</label><br>
                            <small>Mínimo de 6 caracteres</small>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <label for="confsenha">Confirmar Senha</label><br>
                                <input type="password" name="confsenha" id="senha" class="form-control">
                            </div>
                            
                        </div>
                        <br>
                        <div class="input-group">
                            <button name="cadastro-usuario" class="btn btn-primary">Adicionar</button>
                        </div>
                    </form>
                            
                </div>
            </div>      
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
</body>
</html>