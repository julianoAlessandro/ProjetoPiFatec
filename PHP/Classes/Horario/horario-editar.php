<?php
 
    require_once "classes/Horario.php";
    
   
    $id_horario = $_GET['id_horario'];


    $horario = new Horario($id_horario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar-Horario</title>
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
    <h1>Modificação do Horario</h1>
    <h3>Novo Horario</h3>
    <form action="horario-editar-gravar.php" method="POST">
        <input type="hidden" name="id_horario" value="<?= $horario->id_horario ?>">
        <label for="disciplina">NovoHorario:</label>
        <input type="text" name="horario" value="<?= $horario->cargaHoraria ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
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