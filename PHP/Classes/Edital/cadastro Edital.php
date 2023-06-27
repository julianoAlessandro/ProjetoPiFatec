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
		<style>

			b{
			    line-height: 30px;
			}

			p{
			    padding: 10px;
			}

			body{
			    margin: 0px;
			    font-family: Arial, Helvetica, sans-serif; 
			    background-color: #eceae7;    
			}
			.curso{
		    float: left;
		    position: relative;
		    height: 50px;
		    width: 20%;
		    background-color: #b00b18;
		    border: 5px #b00b18;
		    text-align: center;
		    display : flex;
		    align-items: center;
		    justify-content : center;
		    text-decoration: none;
		    color: white;
			}

			.cabeçario{
			    float: left;
			    width: 33%;
			}
			.cab1{
			    float: left;
			    height: 200px;
			    padding: none;
			}

			.cab2{
			    padding-left: 40px;
			    padding-right: 40px;
			    float: center;
			    height: 200px;
			    align-items: center;
			    justify-content : center;
			}

			.cab3{
			    height: 200px;
			    float: right;
			}

			.h1{
			    float: left;
			    width: 100%;
			    text-align: center;
			    color: #151d20;
			    border: 10px;
			}
			.separacao{
			    float: left;
			    background-color: #b00b18;
			    width: 100%;
			    color: white;
			    text-align: center;
			    height: 1px;
			}
			.detalhe{
			    color: #b00b18;
			    padding-top: 0px;
			    margin-top: 0px;
			}

			.rodape{
			    background-color: #2e3e46;
			    height: 250px;
			    padding-bottom: 40px;
			}

			.fatec{
			    float: left;
			    margin-left: 15px;
			    background-color: #2e3e46;
			    width: 40%;
			    color: white;
			    padding-bottom: 40px;
			    height: 250px;
			}

			.sp{
			    float: left;
			    background-color: #2e3e46;
			    width: 30%;
			    color: white;
			    padding-bottom: 40px;
			    height: 250px;
			}

			.centro{
			    float: left;
			    background-color: #2e3e46;
			    width: 20%;
			    color: white;
			    padding-bottom: 40px;
			    height: 250px;
			}

			.imagem{
			    float: center;
			    height: 200px;
			    width: 400px;
			    margin-top: 50px;
			}

			.direito{
			    background-color: #151d20;
			    width: 100%;
			    color: white;
			    text-align: center;
			    height: 30px;
			}

			.form{

			    margin-left: 10px;
			}

			.label{
				width: 100px;
				margin: 10px;
			}
			.input{
				width: 300px;
				margin: 10px;
			}

		</style> 
	</head>
	<body>
		<div id="topo">
	        <div class="cabeçario">
	            <img src="img/sp2.png" class="cab1">
	        </div>

	        <div class="cabeçario">
	            <a href="index2.php"><img src="img/fatec2.png" class="cab2"></a>
	        </div>

	        <div class="cabeçario">
	            <img src="img/itapira2.png" class="cab3">
	        </div>
    	</div>

		<div class="separacao"></div>

    <a href="cadastro Edital.php">
        <div class="curso">
            <p>Cadastrar Edital</p>
        </div>
    </a>

    <a href="ListarEditais.php">
        <div class="curso">
            <p>Relatório Editais</p>
        </div>
    </a>

    <a href="Inscricao.php?acao=listar">
        <div class="curso">
            <p>Relatório de Inscrições</p>
        </div>
    </a>

    <a href="edital-editar.php">
        <div class="curso">
            <p>Errata</p>
        </div>
    </a>

    <a href="usuario-logout.php">
        <div class="curso">
            <p>Sair</p>
        </div>
    </a>

		<br>

		<div class="corpoEdital">

		<form action="cadastroGravar.php" method="POST" enctype="multipart/form-data" class="form">
			<h1>Cadastro de Edital</h1>

			<br>

			<label for="nome" class="label">Nº Edital</label>
			<input type="text" name="nºedital" id="nºedital" class="input" placeholder="Digite o número do Edital">

			<br>

			<label for="curso" class="label">Curso</label>
			<select id="curso" name="curso" class="input">
				<option value='' >Selecione o Curso...</option>
				<?php
					foreach($listaCurso as $linha):
						echo "<option value='{$linha['id_curso']}'>
							{$linha['Nome_Curso']}
						</option>";

					endforeach
				?>
			</select>

			<br>

			<label for="nome disciplina" class="label">Nome Disciplina</label>
			<select id="disciplina" name="disciplina" class="input">
				<option value=''>Selecione a Disciplina...</option>
				<?php
					foreach($listaDisciplina as $linha):
						echo "<option value='{$linha['id_disciplina']}'>
							{$linha['Nome_Disciplina']}
						</option>";

					endforeach

				?>
		
			</select>

			<br>

			<label for="horario" class="label">Carga_Horaria</label>
			<select id="cargaaula" name="cargaaula" class="input">
				<option value=''>Selecione a Carga Horaria...</option>
				<?php
					foreach( $listaCargaAula as $linha):
						echo "<option value='{$linha['id_aula']}'>
							{$linha['cargaHoraria']}
						</option>";

					endforeach

				?>
		
			</select>

			<br>

			<label for="horario" class="label">Horario</label>
			<select id="horario" name="horarioaula" class="input">
				<option value=''>Selecione o Horário...</option>
				<?php
					foreach( $listaHorario as $linha):
						echo "<option value='{$linha['id_horario']}'>
							{$linha['horario']}
						</option>";

					endforeach

				?>
		
			</select>

			<br>

			<label for="prazo" class="label">Prazo</label>
			<select id="horario" name="prazos" class="input">
				<option value=''>Selecione o Prazo...</option>
				<?php
					foreach( $listaPrazo as $linha):
						echo "<option value='{$linha['id_prazo']}'>
							{$linha['prazo']}
						</option>";
					endforeach
				?>
		
			</select>

			<br>

			<label for="nome disciplina" class="label">Semestre</label>
			<select id="semestre" name="semestre" class="input">
				<option value=''>Selecione o Semestre...</option>
				<?php
					foreach( $listaSemestre as $linha):
						echo "<option value='{$linha['id_semestre']}'>
							{$linha['semestre']}
						</option>";

					endforeach

				?>
			</select>

			<br>

			<input type="file" name = "arquivo" accept="application/pdf" >
				<br><br>
			<input type="submit" value="Cadastrar Edital">
					
		</form>
		</div>

		<br>

		<div class="rodape">

	        <div class="fatec">

	            <h1 class="detalhe"><b>____</b></h1>

	            <h1>Fatec Itapira</h1>

	            <br>

	            <b>Endereço:</b> Rua Tereza Lera Paoletti, 570/590 - Jardim Bela Vista

	            <br>

	            <b>CEP:</b> 13.974-080

	            <br>

	            <b>Telefones:</b> (19) 3843-1996

	            <br>

	            <b>WhatsApp:</b> (19) 98933-6291 | (19) 3863-5210  

	            <br>

	            <b>E-mail:</b> contato@fatecitapira.edu.br
	        </div>

	        <div class="centro"></div>

	        <div class="sp">
	            <img src="img/saopaulo.png" class="imagem">
	        </div>   

	   </div>

	   <div class="direito">
	       <p id="magin">Todos os direitos reservados</p>
	   </div>

	</body>
</html>
