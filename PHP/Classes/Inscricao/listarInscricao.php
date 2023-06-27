<?php

require_once "classes/Inscricao.php";
$inscricao = new Inscricao();
$listaInscricao = $inscricao -> listar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="scripts/regras.css">
    <title>Inscritos</title>
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

    <a href="dsm.html">
        <div class="curso">
            <p>Desenvolvimento de Software Multiplataforma</p>
        </div>
    </a>

    <a href="gpi.html">
        <div class="curso">
            <p>Gestão da Produção Industrial</p>
        </div>
    </a>

    <a href="ge.html">
        <div class="curso">
            <p>Gestão Empresarial</p>
        </div>
    </a>

    <a href="gti.html">
        <div class="curso">
            <p>Gestão da Tecnologia da Informação</p>
        </div>
    </a>

    <a href="login.html">
        <div class="curso">
            <p>Login</p>
        </div>
    </a>
    <h2>Inscritos</h2>

    <div class="caixaPesquisa">
        <input type="search" placeholder ="Pesquisar" id="pesquisar">
        <button onclick = "searchData()" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
    </div>

    <table border="1">
        <tr>
            <th>ID inscrição</th>
            <th>Edital</th>
            <th>Usuário</th>
        </tr>
        <?php foreach ( $listaInscricao as $linha): ?>
            <tr>
                <td><?php echo $linha['id'] ?></td>
                <td> <?php echo $linha ['id_edital']?></td>
                <td> <?php echo $linha ['id_usuario']?></td>
             <tr>
        <?php endforeach ?>
        </table>
        <a href="cadastro Edital.php" >Novo_Edital</a>
        <a href="index2.php" >Voltar</a>

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
            window.location = 'listarInscricao.php?search=' + search.value;
        }
    </script>
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

</body>
</html>