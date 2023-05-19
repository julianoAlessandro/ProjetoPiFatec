<?php

require_once "classes/Disciplina.php";
$disciplina = new Disciplina();
$listaDisciplina = $disciplina -> listar();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarDisciplinas</title>
</head>
<body>
    <h2>disciplinas</h2>
    <table border="1">
        <tr>
        <th>id_disciplina</th>
        <th>Nome_Disciplina</th>
        
     
      
        <th>Ações</th>
       

        </tr>
        <td><?php foreach ($listaDisciplina as $linha): ?>
            <tr>
                <td><?php echo $linha['id_disciplina'] ?></td>
                <td> <?php echo $linha ['Nome_Disciplina']?></td>
             <td>
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>

        </td>
        </tr>
        <?php endforeach ?>
        </table>
        <a href="cadastro Edital.html" >Novo_Edital</a>
        <a href="index2.php" >Voltar</a>
</body>
</html>