<?php

require_once "classes/Horario.php";
$horario = new Horario();
$listaHorario = $horario -> listar();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarHorario</title>
</head>
<body>
    <h2>Horario</h2>
    <table border="1">
        <tr>
        <th>id_horario</th>
        <th>horario</th>  
         
        <th>Ações</th>
       

        </tr>
        <td><?php foreach ( $listaHorario as $linha): ?>
            <tr>
                <td><?php echo $linha['id_horario'] ?></td>
                <td> <?php echo $linha ['horario']?></td>
             <td>
               
             <a href="horario-excluir.php?id_horario=<?= $linha['id_horario'] ?>">Excluir</a>
             <a href="horario-editar.php?id_horario=<?= $linha['id_horario'] ?>">Atualizar</a>

        </td>
        </tr>
        <?php endforeach ?>
        </table>
        <a href="cadastro Edital.php" >Novo_Edital</a>
        <a href="index2.php" >Voltar</a>
</body>
</html>