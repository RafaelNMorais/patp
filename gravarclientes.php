<?php

$dados = $_POST;

$nome = $dados['nome'];
$email = $dados['email'];
$senha_form = $dados['senha'];
$telefone = $dados['telefone'];


$sql = "INSERT INTO clientes (nome, email, senha, telefone) VALUES ('$nome', '$email', MD5('$senha_form'), '$telefone')";

include 'conexaobanco.php';
$conexao = new Conexao();

$conexao->execute($sql);

echo "<script> alert('Formulário foi salvo com sucesso'); window.location.href = 'listarclientes.php' </script>";

?>