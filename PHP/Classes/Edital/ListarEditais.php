<?php

require_once "classes/Edital.php";
$edital = new Edital();
$listaEdital = $edital -> listar();
?>



<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8"3>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="scripts/regras.css">
    <title>Relatorio de Editais</title>
    <style>
        .icone{
            height: 30px;
            width: 30px;
        }

        .tb{
            text-align: center;

        }
        
    </style>

</head>
<body>
    <div id="topo">
        <div class="cabeçario">
            <img src="img/sp2.png" class="cab1">
        </div>

        <div class="cabeçario">
            <a href="index.php"><img src="img/fatec2.png" class="cab2"></a>
        </div>

        <div class="cabeçario">
            <img src="img/itapira2.png" class="cab3">
        </div>
    </div>

    <div class="separacao"></div>

    <div>
        <img src="img/fatec.jpg" class="titulo">
    </div>

    <a href="cadastro Edital.php">
        <div class="curso">
            <p>Cadastrar Edital</p>
        </div>
    </a>

    <a href="ListarEditais.php">
        <div class="curso">
            <p>Relatório Editais</p>
        </div>
    </a>

    <a href="Inscricao.php?acao=listar">
        <div class="curso">
            <p>Relatório de Inscrições</p>
        </div>
    </a>

    <a href="edital-editar.php">
        <div class="curso">
            <p>Errata</p>
        </div>
    </a>

    <a href="usuario-logout.php">
        <div class="curso">
            <p>Sair</p>
        </div>
    </a>
    
    <h1>RelatorioEdital</h1>

    <br>

    <div class="caixaPesquisa">
        <input type="search" placeholder ="Pesquisar" id="pesquisar">
        <button onclick = "searchData()" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
    </div>

    <br>

    <table border="1" class="tb">
        <tr>
            <th>Nº Edital</th>
            <th>Curso</th>
            <th>Semestre</th>
            <th>Sigla</th>
            <th>Disciplina</th>
            <th>Carga Horaria</th>
            <th>Horario</th>
            <th>Prazo</th>
            <th>Arquivo PDF</th>
            <th>Status</th>
            <th>Alterar Status</th>
        </tr>
        <?php foreach ($listaEdital as $linha): ?>
            <tr>
                <td><?php echo $linha['N_edital'] ?></td>
                <td> <?php echo $linha ['Nome_Curso']?></td>
                <td> <?php echo $linha ['semestre']?></td>
                <td> <?php echo $linha ['sigla_curso']?></td>
                <td> <?php echo $linha ['Nome_Disciplina']?></td>
                <td> <?php echo $linha ['cargaHoraria']?></td>
                <td> <?php echo $linha ['horario']?></td>
                <td> <?php echo $linha ['prazo']?></td>
                <td><a href="<?php echo $linha ['arquivosEdital']?>"><img src="img/doc.png" class="icone"></a></td>
                <td> <?php echo $linha ['StatusEdital']?></td>
                <td>
                    <a href="edital-editar.php?id=<?=$linha['id'] ?>"><img src="img/escrever.png" class="icone"></a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <br>

    <div class="rodape">

        <div class="fatec">

            <h1 class="detalhe"><b>____</b></h1>

            <h1>Fatec Itapira</h1>

            <br>

            <b>Endereço:</b> Rua Tereza Lera Paoletti, 570/590 - Jardim Bela Vista

            <br>

            <b>CEP:</b> 13.974-080

            <br>

            <b>Telefones:</b> (19) 3843-1996

            <br>

            <b>WhatsApp:</b> (19) 98933-6291 | (19) 3863-5210  

            <br>

            <b>E-mail:</b> contato@fatecitapira.edu.br
        </div>

        <div class="centro"></div>

        <div class="sp">
            <img src="img/saopaulo.png" class="imagem">
        </div>   

   </div>

   <div class="direito">
       <p id="magin">Todos os direitos reservados</p>
   </div>

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
       
</body>

</html>