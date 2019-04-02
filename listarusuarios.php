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
    ?>
    <h1>Usuários</h1>
    <br>

    <div class="tabela">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Usuário</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maria Da Silva</td>
                    <td>mariadasilva01@gmail.com</td>
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
                <h5 class="modal-title">Excluir Usuário?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você deseja realmente excluir esse usuário?.</p>
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