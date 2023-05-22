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
    <h1>RelatorioEdital</h1>
    <h2>Seja bem vindo julianoalessandro08@gmail.com</h2>
    <div class="caixaPesquisa">
        <input type="search" placeholder ="Pesquisar" id="pesquisar">
        <button onclick = "searchData()" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
</div>
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
        <th>ArquivoPDF</th>
     

       

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
                <td><a href="<?php echo $linha ['arquivosEdital']?>"><?php echo $linha ['arquivosEdital']?></a></td>
           
        </tr>
        <?php endforeach ?>
        </table>
        <a href="cadastro Edital.php" >Novo_Edital</a>
        <a href="index2.php" >Voltar</a>
</body>

<script>
var search = document.getElementById('pesquisar');

search.addEventListener("keydown",function(event)
{
    if(event.key == "Enter")
    {
        searchData();
    }
});
function searchData()
{
    window.location = 'ListarEditais.php?search=' + search.value;
}


</script>
</html>