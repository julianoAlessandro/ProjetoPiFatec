<?php

require_once "classes/Disciplina.php";
$id_disciplina = $_POST['id_disciplina'];
$disciplina = new Disciplina($id_disciplina);
$disciplina->Nome_Disciplina = $_POST['disciplina'];
$disciplina->id_disciplina = $_POST['id_disciplina'];
$disciplina->atualizar();
header('Location: listarDisciplina.php');
?>