<?php

require_once 'classes/Horario.php';
$id_horario= $_GET['id_horario'];
$horario = new Horario($id_horario);
$horario->excluir();
header('Location: listarHorario.php');
?>