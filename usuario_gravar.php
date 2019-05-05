<?php

$dados = $_POST;

$nome = $dados['nome'];
$usuario = $dados['usuario'];
$email = $dados['email'];
$senha_form = $dados['senha'];

$sql = "INSERT INTO usuarios (nome, usuario, email, senha) VALUES ('$nome', '$usuario', '$email', MD5('$senha_form'))";

include 'conexaobanco.php';
$conexao = new Conexao();

$conexao->execute($sql);

echo "<script> alert('Formulário foi salvo com sucesso'); window.location.href = 'listarusuarios.php' </script>";

?>