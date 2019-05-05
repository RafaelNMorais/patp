<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilomenu.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("menu.php");
    ?>
    <h1>Cadastro de Clientes</h1>
        <br>

    <div class="cadastrousuario">
        <form action="gravarclientes.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome :</label>
                <input type="text" name="nome" class="form-control" id="Nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="usuario">Senha</label>
                <input type="password" name="senha" class="form-control" id="Senha" placeholder="Digite sua senha" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="mail" name="email" class="form-control" id="Email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="senha">Telefone</label>
                <input type="number" name="telefone" class="form-control" id="Telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="listarclientes.php" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>