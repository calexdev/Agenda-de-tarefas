<?php

include "conexao.php";

$id = $_POST["txtid"];

$executa = "DELETE FROM tb_tarefas WHERE id=$id";

$query = $mysqli->query($executa);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title> Exclusao de dados </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
	
	<body>
        <div class="container">
            <div class="col-sm-10">
                <div class="jumbotron">
                    <div class="col">
                        <i class="material-icons icon">check</i>
                        
                        <h3 style="color: black;">Exclusão Realizada com Sucesso</h3>

                        <form action='todas_tarefas.php'>
                            <input class="bt1 btn btn-primary" type='submit' value='Voltar' />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>