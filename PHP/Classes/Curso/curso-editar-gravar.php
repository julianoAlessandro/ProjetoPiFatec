<?php

require_once "classes/Curso.php";
$id_curso = $_POST['id_curso'];
$curso = new Curso($id_curso);
$curso->Nome_Curso = $_POST['curso'];
$curso->id_curso = $_POST['id_curso'];
$curso->atualizar();
header('Location: listarCurso.php');
?>