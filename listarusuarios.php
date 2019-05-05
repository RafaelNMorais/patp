<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilomenu.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("menu.php");
        include("conexaobanco.php");

        $sql = "SELECT *
                  FROM usuarios
                 ORDER BY id_usuario";
    
    $conexao = new Conexao();
    
    $usuarios = $conexao->execute($sql);

    ?>
    <h1>Usuários</h1>
    <br>

    <div class="tabela">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php while($user = $usuarios->fetch_array()) { ?>
                <tr>
                    <th scope="row"><?php echo $user['id_usuario']; ?></th>
                    <td><?php echo $user['nome']; ?></td>
                    <td><?php echo $user['usuario']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                    <a href="cadastrousuario.php?" class="btn btn-primary">Editar</a>
                    <a href="excluirusuario.php?id=<?php echo $user['id_usuario']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>