<?php
// inclui o arquivo  que contém a definição da classe Turma
require_once "classes/Edital.php";
//cirar um novo objeto turma
$edital = new Edital();
$edital ->nºedital = $_POST['nºedital'];
$edital  ->id_curso = $_POST['curso'];
$edital  ->id_disciplina = $_POST['disciplina'];
$edital  ->cargaH = $_POST['cargaH'];
$edital ->horario = $_POST['horario'];
$edital-> inserir();

?>