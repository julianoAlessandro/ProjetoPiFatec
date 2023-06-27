<?php

require_once 'classes/Curso.php';
$id_curso = $_GET['id_curso'];
$curso = new Curso($id_curso);
$curso->excluir();
header('Location: listarCurso.php');
?>