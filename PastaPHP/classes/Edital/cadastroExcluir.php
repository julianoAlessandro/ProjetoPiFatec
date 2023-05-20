<?php
// cadastroExcluir.php

require_once "classes/Cadastrar.php";

if(isset($_POST['id_disciplina'])) {
    $id_disciplina = $_POST['id_disciplina'];
    $cadastro = new Cadastrar();
    $cadastro->id_disciplina = $id_disciplina;
    $cadastro->excluir();
    header('Location: ListarEditais.php');
}

?>
