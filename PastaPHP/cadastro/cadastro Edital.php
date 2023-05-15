<?php

require_once "classes/Edital.php";
require_once "classes/Curso.php";
require_once "classes/Disciplina.php";
$edital = new Edital();
$listarEdital = $edital -> listar();
$curso = new Curso();
$listaCurso = $curso->listar();
$disciplina = new Disciplina();
$listaDisciplina = $disciplina -> listar();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title> Cadastro Edital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ArquivosPI/ArquivosCSS/cadastrar edital.css"> 
	</head>
	<body>
 	
		<div class="img_fatec">
			<img src="img/fatec.png"> 
		</div>

		<div class="img_fatec2">
			<img src="img/fatec2.png">
		</div>

		<div class="img_brasao">
			<img src="img/brasao.png">
		</div>
		
		<div class="separacao"></div>	
		
		<div class="comeco">
		<a href="cadastro Edital.html">Cadastrar Edital</a>
		</div>

		<div class="comeco">
		<a href="visualizar candidatos inscritos.html">Visualizar Candidatos Inscritos</a> 
		</div>

		<div class="comeco">
		<a href="fazer errata.html">Fazer Errata</a> 
		</div>
		
		<div class="comeco">
		<a href="sair.html">Sair</a> 
		</div>

		<form action="cadastroGravar.php" method="POST">
				<h3>Cadastro de Edital</h3>
				<label for="nome">Nº Edital</label>
				<input type="text" name="nºedital" id="nºedital"><br>				
				<label for="curso">Curso</label>
				<select id="curso" name="curso">
					<option value='' >Selecione o seu curso...</option>
					<?php
						foreach($listaCurso as $linha):
							echo "<option value='{$linha['id_curso']}'>
								{$linha['Nome_Curso']}
							</option>";

						endforeach
					?>
				</select><br>
					<label for="nome disciplina">Nome Disciplina</label>
						<select id="disciplina" name="disciplina">
						<option value=''>Selecione a disciplina...</option>
						<?php
						foreach($listaDisciplina as $linha):
							echo "<option value='{$linha['id_disciplina']}'>
								{$linha['Nome_Disciplina']}
							</option>";

						endforeach

						?>
				
					</select><br>

				
				
				<label for="carga horaria">Carga Horária</label>
				<input type="text" name="cargaH" id="carga horaria"> <br>
				<label for="horario">Horário</label>
				<input type="text" name="horario" id="horario" placeholder="00:00:00"> <br>
				<input type="submit" value="  Cadastrar Edital">	
					
		</form>
		<a href="listarDisciplina.php">VisualizarDisciplinas</a><br>
		<a href="listarDisciplina.php">VisualizarCursos</a><br>
		<a href="listarDisciplina.php">VisualizarRelatorioEdital</a><br>

	</body>
</html>
