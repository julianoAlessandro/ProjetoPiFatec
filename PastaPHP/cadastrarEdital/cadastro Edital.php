<?php

require_once "classes/Edital.php";
require_once "classes/Curso.php";
require_once "classes/Disciplina.php";
require_once "classes/Horario.php";
require_once "classes/CargaHoraria.php";
require_once "classes/Prazo.php";
require_once "classes/Semestre.php";
$edital = new Edital();
$listarEdital = $edital->listar();
$curso = new Curso();
$listaCurso = $curso->listar();
$disciplina = new Disciplina();
$listaDisciplina = $disciplina -> listar();
$cargaaula	=	new	CargaHoraria();
$listaCargaAula	=	$cargaaula	->listar();
$horario = new Horario();
$listaHorario = $horario -> listar();
$prazo = new Prazo();
$listaPrazo = $prazo ->listar();
$semestre = new Semestre();
$listaSemestre = $semestre -> listar();
	
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title> Cadastro Edital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="regras.css"> 
	</head>
	<body>
	<div id="topo">
	        <div class="cabeçario">
	            <img src="img/sp2.png" class="cab1">
	        </div>

	        <div class="cabeçario">
	            <img src="img/fatec2.png" class="cab2">
	        </div>

	        <div class="cabeçario">
	            <img src="img/itapira2.png" class="cab3">
	        </div>
	    </div>

		
		<div class="separacao2"></div>

<a href="cadastro Edital.html">
	<div class="começo">
		<p>Cadastar Edital</p>
	</div>
</a>

<a href="fazer errata.html">
	<div class="começo">
		<p>Fazer Errata</p>
	</div>
</a>

<a href="visualizar candidatos inscritos.html">
	<div class="começo">
		<p>Visualizar Candidatos Inscritos</p>
	</div>
</a>

<a href="sair.html">
	<div class="começo">
		<a href="index2.php">Sair</a>
	</div>
</a>

		<form action="cadastroGravar.php" method="POST" enctype="multipart/form-data">
				<h3>Cadastro de Edital</h3>
				<label for="nome">N_ Edital</label>
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
				<label for="nome disciplina" >Nome Disciplina</label>
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


				<label for="horario" >Carga_Horaria</label>
					<select id="cargaaula" name="cargaaula">
					<option value=''>Selecione a Carga_Horaria...</option>
					<?php
						foreach( $listaCargaAula as $linha):
							echo "<option value='{$linha['id_aula']}'>
								{$linha['cargaHoraria']}
							</option>";

						endforeach

					?>
			
				</select><br>
				<label for="horario" >Horario</label>
					<select id="horario" name="horarioaula">
					<option value=''>Selecione o horario...</option>
					<?php
						foreach( $listaHorario as $linha):
							echo "<option value='{$linha['id_horario']}'>
								{$linha['horario']}
							</option>";

						endforeach

					?>
			
				</select><br>

				<label for="prazo" >Prazo</label>
					<select id="horario" name="prazos">
					<option value=''>Selecione o Prazo...</option>
					<?php
						foreach( $listaPrazo as $linha):
							echo "<option value='{$linha['id_prazo']}'>
								{$linha['prazo']}
							</option>";

						endforeach

					?>
			
				</select><br>
				
				<label for="nome disciplina" >Semestre</label>
					<select id="semestre" name="semestre">
					<option value=''>Selecione o semestre...</option>
					<?php
						foreach( $listaSemestre as $linha):
							echo "<option value='{$linha['id_semestre']}'>
								{$linha['semestre']}
							</option>";

						endforeach

					?>
			
				</select><br>
				<input type="file" name = "arquivo" accept="application/pdf" ></P><br>				
				<input type="submit" value="Cadastrar Edital">	

			

					
		</form>
		

	</body>
</html>
