<?php
//Inclui o arquivo que contém a classe Turma

require_once "classes/Cadastrar.php";
//Cria um novo objeto Turma
$cadastro = new Cadastrar();
//chama o método "listar" e armazena o resultado em uma variavel
$lista = $cadastro->listar();



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos Cadastros no Sistema</title>
</head>
<body>
<h2>Listar  de Editais</h2>
<table border= "1">
    <tr>
        <th>Identificação_id</th>
        <th>nºedital<th>
           
      
       

</tr>
<?php foreach($lista as $linha): ?>
    <tr>
        <td><?php echo $linha['id']?></td>
        <td><?php echo $linha['nºedital']?></td>
        <td><?php echo $linha['curso']?></td>
        <td><?php echo $linha['disciplina']?></td>
        <td><?php echo $linha['cargaH']?></td>
        <td><?php echo $linha['horario']?></td>
     

   
       
</tr>
<?php endforeach ?>
</table>

    
</body>
</html>
	