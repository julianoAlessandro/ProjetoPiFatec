<?php
 
    require_once "classes/Disciplina.php";
    var_dump($_POST);
   
    $id_disciplina = $_GET['id_disciplina'];


    $disciplina = new Disciplina($id_disciplina);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar-Disciplina</title>
</head>
<body>
    <h1>Modificação da Disciplina</h1>
    <h3>Nova Disciplina</h3>
    <form action="disciplina-editar-gravar.php" method="POST">
        <input type="hidden" name="id_disciplina" value="<?= $disciplina->id_disciplina ?>">
        <label for="disciplina">Disciplina:</label>
        <input type="text" name="disciplina" value="<?= $disciplina->Nome_Disciplina ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>