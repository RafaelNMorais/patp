<?php

$dados = $_GET;

$id = $dados["id"];

    $sql = "DELETE FROM clientes WHERE id_cliente='$id';";

    include ("conexaobanco.php");
    
    $conexao = new Conexao();

    $conexao->execute($sql);

    header("location: listarclientes.php");

?>