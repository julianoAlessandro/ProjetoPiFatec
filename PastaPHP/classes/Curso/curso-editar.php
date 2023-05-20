<?php
 
    require_once "classes/Curso.php";

   
    $id_curso = $_GET['id_curso'];


    $curso = new Curso($id_curso);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar-curso</title>
</head>
<body>
    <h1>Modificação do Curso</h1>
    <h3>Novo Curso/alterações</h3>
    <form action="curso-editar-gravar.php" method="POST">
        <input type="hidden" name="id_curso" value="<?= $curso->id_curso ?>">
        <label for="disciplina">Curso:</label>
        <input type="text" name="curso" value="<?= $curso->Nome_Curso ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>