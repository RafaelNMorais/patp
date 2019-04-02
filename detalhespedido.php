<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detalhes do Pedido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet"  href="css/estilomenu.css">
</head>
<body>
    <?php
        include("menu.php");
    ?>
    <h1>Área Administrativa</h1>
        <br>
        <h3>Visão Geral De Pedidos</h3>
        <br>

    <div class="tabela">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Quantidade de Fotos Selecionadas</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maria Da Silva</td>
                    <td>Casamento</td>
                    <td>10</td>
                    <td class="text-center"><button type="button" class="btn btn-primary btn-sm">Ver</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>