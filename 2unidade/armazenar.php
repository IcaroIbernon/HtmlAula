<?php
$v1 = 'teste';
$v2 = 'teste';
$v3 = 'teste';
$conexao = mysqli_connect("localhost:3306", "root", "root");
if($conexao){
echo "Conexão estabelecida com sucesso!";}
else{
echo "Erro ao estabelecer conexão.";}
mysqli_select_db($conexao, "dados");
mysqli_query($conexao,
"INSERT INTO pessoas
(nome,telefone,email)
VALUES
('$v1','$v2','$v3')
");
?>
