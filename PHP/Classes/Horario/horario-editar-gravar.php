<?php

require_once "classes/Horario.php";
$id_horario = $_POST['id_horario'];
$horario = new Horario($id_horario);
$horario->horario= $_POST['horario'];
$horario->id_horario = $_POST['id_horario'];
$horario->atualizar();
header('Location: listarHorario.php');
?>