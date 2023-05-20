<?php
require_once "classes/Edital.php";
$edital = new Edital();
$edital ->nºedital = $_POST['nºedital'];
$edital  ->id_curso = $_POST['curso'];
$edital  ->id_disciplina = $_POST['disciplina'];
//$edital  ->cargaH = $_POST['cargaH'];
//$edital ->horario = $_POST['horario'];
$edital -> id_aula = $_POST['cargaaula'];
$edital -> id_semestre = $_POST['semestre'];
$edital -> id_prazo = $_POST['prazos'];
$edital -> id_horario = $_POST['horarioaula'];
$edital-> inserir();


?>