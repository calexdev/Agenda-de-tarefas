<?php
include 'conexao.php';

$executa = "SELECT * FROM tb_tarefas ORDER BY id";

$query = $mysqli->query($executa);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="estilo.css">
	<script src="main.js"></script>
    <title>Cadastro de Tarefas</title>
</head>
<body>
        <nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="logo.png" width="110" height="30" class="d-inline-block align-top" alt="">
					Agenda de Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item active"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas as Tarefas</h4>
								<hr />
								
								<table class="table table-borderless table-hover">
									<thead class="bg-primary">
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Data do Cadastro</th>
											<th colspan="2">Tarefa</th>
											<th scope="col">Alterar</th>
											<th scope="col">Excluir</th>
										</tr>
									</thead>
									<?php

									while ($dados=mysqli_fetch_object($query)) {
									$id = $dados->id;
									echo "<tr> <td>".$dados->id  ."</td>";
									//echo "<td>" .$dados->data_cadastro . "</td>";
									echo "<td>" . date("d-m-y", strtotime($dados->data_cadastro)) ."</td>";
									echo "<td colspan='2'>" .$dados->tarefa ."</td>";
									echo "<td><a href='editar.php?id=$id' ><i class='large material-icons'>edit</i></a></td>";
									echo "<td><a href='excluir.php?id=$id' ><i class='large material-icons'>cancel</i></a></td>";
									
									}

									$query->free();

									?>
                    			</table>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
			
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>