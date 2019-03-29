<?php
include 'conexao.php';

//$id_status = $_POST["id_status"];
$tarefa = $_POST["tarefa"];

$executa = "INSERT INTO tb_tarefas(tarefa) VALUES ('$tarefa')";

$query = $mysqli->query($executa);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grava</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-sm-10">
            <div class="jumbotron">
                <div class="form-group">
                <h4 style="margin-left: 210px;">Cadastro efetuado com sucesso!</h4>
                </div>
                <hr>
                    <a style="margin-left: 500px; " href="todas_tarefas.php">Voltar</a>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>