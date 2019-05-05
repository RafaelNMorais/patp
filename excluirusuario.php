<?php

$dados = $_GET;

$id = $dados["id"];

    $sql = "DELETE FROM usuarios WHERE id_usuario='$id';";

    include ("conexaobanco.php");
    
    $conexao = new Conexao();

    $conexao->execute($sql);

    header("location: listarusuarios.php");

?>