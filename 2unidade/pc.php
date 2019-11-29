<html>
    <head>
    <meta http-equiv="content-type" content="text/html;"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" 
    integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" 
    crossorigin="anonymous">
    <title>Painel de Controle</title>
    </head>

<body>
<?php

    $conexao = mysqli_connect("localhost:3306", "root", "root");
    mysqli_select_db($conexao,"dados");
    $dados = mysqli_query($conexao,"SELECT * from pessoas");
    
?>
<h1>Lista de pessoas cadastradas</h1>

<?php
    while($tabela = mysqli_fetch_array($dados)){
        ?>
        <div class="table-responsive col-sm-4">
            <table class="table table-hover table-condensed">
                <tr>
                    <td style="width: 5%"><?php echo $tabela['id']; ?></td>
                    <td style="width: 20%"><?php echo $tabela['nome']; ?></td>
                    <td style="width: 20%"><?php echo $tabela['telefone']; ?></td>
                    <td style="width: 45%"><?php echo $tabela['email']; ?></td>
                <tr>
            <?php
            }
             ?>
            
            </table>
        </div>
            <a href='apagar.php' class='btn btn-danger' style='margin-left: 5px;'>Limpar Lista</a>
        </body>
</html>