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