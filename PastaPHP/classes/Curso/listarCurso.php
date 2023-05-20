<?php

require_once "classes/Curso.php";
$curso = new Curso();
$listaCurso = $curso -> listar();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarCurso</title>
</head>
<body>
    <h2>Cursos</h2>
    <table border="1">
        <tr>
        <th>id_curso</th>
        <th>Nome_Curso</th>      
        <th>sigla_curso</th>      
     
      
        <th>Ações</th>
       

        </tr>
        <td><?php foreach ($listaCurso as $linha): ?>
            <tr>
                <td><?php echo $linha['id_curso'] ?></td>
                <td> <?php echo $linha ['Nome_Curso']?></td>
                <td> <?php echo $linha ['sigla_curso']?></td>
             <td>
               <a href="curso-excluir.php?id_curso=<?= $linha['id_curso'] ?>">Excluir</a>
               <a href="curso-editar.php?id_curso=<?= $linha['id_curso'] ?>">Atualizar</a>


        </td>
        </tr>
        <?php endforeach ?>
        </table>
        <a href="cadastro Edital.php" >Novo_Edital</a>
        <a href="index2.php" >Voltar</a>
</body>
</html>