<?php
// inclui o arquivo  que contém a definição da classe Turma
require_once "classes/Cadastrar.php";
//cirar um novo objeto turma
$cadastro = new Cadastrar();
$cadastro ->nºedital = $_POST['nºedital'];
$cadastro  ->curso = $_POST['curso'];
$cadastro  ->disciplina = $_POST['disciplina'];
$cadastro  ->cargaH = $_POST['cargaH'];
$cadastro  ->horario = $_POST['horario'];
$cadastro -> inserir();

?>