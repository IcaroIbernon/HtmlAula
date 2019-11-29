<?php
$conexao = mysqli_connect("localhost:3306", "root", "root");
mysqli_select_db($conexao, "dados");
mysqli_query($conexao,
"TRUNCATE TABLE pessoas");
header('location:pc.php');
?>