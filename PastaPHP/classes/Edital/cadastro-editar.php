<?php
   
    require_once "classes/Cadastrar.php";

    $id_disciplina = $_GET['id_disciplina'];

   
    $cadastro= new Cadastrar($id_disciplina);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ALTERAR DISCIPLINA</title>
</head>
<body>
    <h1>ALTERAR DISCIPLINA</h1>
    <form action="cadastro-editar-gravar.php" method="POST">
        <input type="hidden" name="id_disciplina" value="<?= $cadastro->id_disciplina ?>">
        <label for="descTurma">Nome_Disciplina:</label>
        <input type="text" name="Nome_Disciplina" value="<?= $cadastro->Nome_Disciplina ?>">
        <input type="submit" value="Gravar">
    </form>
</body>