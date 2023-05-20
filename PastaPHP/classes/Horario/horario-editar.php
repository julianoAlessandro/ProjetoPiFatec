<?php
 
    require_once "classes/Horario.php";
    
   
    $id_horario = $_GET['id_horario'];


    $horario = new Horario($id_horario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar-Horario</title>
</head>
<body>
    <h1>Modificação do Horario</h1>
    <h3>Novo Horario</h3>
    <form action="horario-editar-gravar.php" method="POST">
        <input type="hidden" name="id_horario" value="<?= $horario->id_horario ?>">
        <label for="disciplina">NovoHorario:</label>
        <input type="text" name="horario" value="<?= $horario->cargaHoraria ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>