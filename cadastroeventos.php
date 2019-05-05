<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Eventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilomenu.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("menu.php");
    ?>
    <h1>Cadastro de Eventos</h1>
        <br>

    <div class="cadastrousuario">
        <form>
            <div class="form-group">
                <label for="nome">Nome :</label>
                <input type="text" class="form-control" id="Nome" placeholder="Digite o nome do evento" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="Tipo" placeholder="Selecione o tipo de evento" required>
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" id="Data" placeholder="Digite a data que acontecerá o evento" required>
            </div>
            <div class="form-group">
                <label for="local">Local</label>
                <input type="text" class="form-control" id="Local" placeholder="Digite o local do evento" required>
            </div>
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" class="form-control" id="Cliente" placeholder="Selecione o cliente" required>
            </div>
                <label for="upload">Seleção de Fotos</label>
                <input type="file" />
                <br>
                <br>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="submit" class="btn btn-primary">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>