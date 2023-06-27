<?php

require_once "classes/edital.php";
$id_disciplina = $_POST['id_disciplina'];
$cadastro = new Cadastrar($id_disciplina);
$cadastro->id_disciplina = $_POST['id_disciplina'];
$cadastro->Nome_Disciplina = $_POST['Nome_Disciplina'];
$cadastro->atualizar();
header('Location: ListarEditais.php');
?>