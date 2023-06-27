<?php

require_once 'classes/Disciplina.php';
$id_disciplina = $_GET['id_disciplina'];
$disciplina = new Disciplina($id_disciplina);
$disciplina->excluir();
header('Location: listarDisciplina.php');
?>