<?php
    require_once "classes/Edital.php";
    $idEdital = $_GET['id'];
    $edital = new Edital($idEdital);
    //$edital->N_edital = $idEdital;
    //$edital->carregar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="scripts/regras.css">
    <title>Atualizar Status Edital</title>
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

    <a href="listarInscricao.php">
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

    <h3>Atualizar Status</h3>

    <form action="edital-editar-gravar.php" method="POST">
        <input type="hidden" name="id" value="<?= $edital->id ?>">
        <label for="status">Novo Status:</label><br>
        <input type="radio" name="status" value="ABERTO"><label>ABERTO</label> <br>
        <input type="radio" name="status" value="FECHADO"><label>FECHADO</label> <br>
        <input type="radio" name="status" value="FINALIZADO"><label>FINALIZADO</label> <br>
        <input type="radio" name="status" value="CANCELADO"><label>CANCELADO</label> <br>
        <input type="radio" name="status" value="PUBLICADO"><label>PUBLICADO</label> <br>
        <input type="radio" name="status" value="RECEBENDO INSCRIÇOES"><label>RECEBENDO INSCRIÇOES</label> <br>
        <input type="radio" name="status" value="FINALIZADO SEM INSCRITOS"><label>FINALIZADO SEM INSCRITOS</label> <br>
        <input type="radio" name="status" value="ERRATA"><label>ERRATA</label>
        <br><br>
        <input type="submit" value="Gravar">
    </form>

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

</body>
</html>