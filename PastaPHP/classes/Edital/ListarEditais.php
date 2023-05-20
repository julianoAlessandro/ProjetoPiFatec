<?php

require_once "classes/Edital.php";
$edital = new Edital();
$listaEdital = $edital -> listar();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RelatorioEdital</title>
</head>
<body>
    <h2>RelatorioEdital</h2>
    <table border="1">
        <tr>
        <th>N_edital</th>
        <th>Curso</th>
        <th>Semestre</th>
        <th>sigla_curso</th>
        <th>Disciplina</th>
        <th>CargaHoraria</th>
        <th>Horario</th>
        <th>Prazo</th>
     

       

        </tr>
        <td><?php foreach ($listaEdital as $linha): ?>
            <tr>
                <td><?php echo $linha['N_edital'] ?></td>
                <td> <?php echo $linha ['Nome_Curso']?></td>
                <td> <?php echo $linha ['semestre']?></td>
                <td> <?php echo $linha ['sigla_curso']?></td>
                <td> <?php echo $linha ['Nome_Disciplina']?></td>
                <td> <?php echo $linha ['cargaHoraria']?></td>
                <td> <?php echo $linha ['horario']?></td>
                <td> <?php echo $linha ['prazo']?></td>
           
        </tr>
        <?php endforeach ?>
        </table>
        <a href="cadastro Edital.php" >Novo_Edital</a>
        <a href="index2.php" >Voltar</a>
</body>
</html>