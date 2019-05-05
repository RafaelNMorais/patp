<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de Eventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilomenu.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("menu.php");
    ?>
    <h1>Eventos</h1>
    <br>

    <div class="alinhabtn">    
    <button type="button" class="btn btn-primary btn-sm">Cadastrar</button>    
    </div>
    <br>

    <div class="tabela">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Local</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Pedidos</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Casamento da Simone</td>
                    <td>18/05/2019</td>
                    <td>Casamento</td>
                    <td>Getúlio Vargas</td>
                    <td>Simone</td>
                    <td>0</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-primary btn-sm">Editar</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#excluirusuario">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="modal" tabindex="-1" role="dialog" id="excluirusuario">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Evento?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você deseja realmente excluir esse evento.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-primary">Sim</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>