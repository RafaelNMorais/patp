<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilomenu.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("menu.php");
    ?>
    <h1>Cadastro de Usuário</h1>
        <br>

    <div class="cadastrousuario">
        <form>
            <div class="form-group">
                <label for="nome">Nome :</label>
                <input type="text" class="form-control" id="Nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" class="form-control" id="Usuario" placeholder="Digite seu usuário" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="mail" class="form-control" id="Email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="Senha" placeholder="Digite sua senha" required>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="submit" class="btn btn-primary">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>