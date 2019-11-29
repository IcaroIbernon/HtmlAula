<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$conexao = mysqli_connect("localhost:3306", "root", "root");
mysqli_select_db($conexao, "dados");
mysqli_query($conexao,
"INSERT INTO pessoas
(nome,telefone,email)
VALUES
('$nome','$telefone','$email')
"); 
mysqli_close($conexao);
header('location:cadastro.html');
?>
