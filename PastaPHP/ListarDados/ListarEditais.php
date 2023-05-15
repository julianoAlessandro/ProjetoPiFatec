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
    <title>Document</title>
</head>
<body>
    <h2>disciplinas</h2>
    <table border="1">
        <tr>
        <th>N_Edital</th>
        <th>Carga_Horaria</th>
        <th>Horario</th>
        <th>Nome_Curso</th>
        <th>sigla_curso</th>
        <th></th>
     
      
        <th>Ações</th>
       

        </tr>
        <td><?php foreach ($listaEdital as $linha): ?>
            <tr>
                <td><?php echo $linha['N_edital'] ?></td>
                <td> <?php echo $linha ['cargaH']?></td>
                <td> <?php echo $linha ['horario']?></td>
                <td> <?php echo $linha ['curso']?></td>
                <td>
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>

        </td>
        </tr>
        <?php endforeach ?>
        </table>
        <a href="cadastro Edital.html" >Novo_Edital</a>
</body>
</html>