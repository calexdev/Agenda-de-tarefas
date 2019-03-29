<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="estilo.css">
    <title>Cadastro de Tarefas</title>
	<script>
		function validaCampo(){
			let tarefa = formtarefa.tarefa.value;

			if(tarefa == ""){
				alert("Descrição da tarefa é obrigatório");
				formtarefa.tarefa.focus();
				return false;
			}
		}
	</script>
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
						<li class="list-group-item active"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova Tarefa</h4>
								<hr />
								<form action="grava.php" method="post" name="formtarefa" class="form-horizontal" style="margin-left: 20px;">
									<div class="form-group">
                                        <label>Descrição da tarefa:</label><br>
										<input type="text" class="form-control" name="tarefa"   placeholder="Exemplo: Ler o livro PHP7.">
									</div>
                                    <button name="botao" id="botao" onclick="return validaCampo()" class="btn btn-primary">Cadastrar</button>
								</form>
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