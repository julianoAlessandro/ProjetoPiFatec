<?php
//require_once "classes/conexao.php";

//require_once "Database.php";
//$conexao = Database::conexao();

$acao = $_GET['acao'];

if($acao !== "listar"){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco_editais";

$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

session_start();
$id_usuario = $_SESSION['id'];

$id_edital = $_GET['id_edital'];

$sqlInscricao = "INSERT INTO inscricao (id_usuario, id_edital, datahora)VALUES ({$id_usuario}, {$id_edital}, now())";
                    
$conexao->query($sqlInscricao);   
           
 echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/pi-atualizado/index.php';
    </script>");

}
else{

$sqlInscricao = "SELECT e.N_edital, u.nome, i.id
   FROM inscricao i
   inner join usuarios u ON u.id_usuario  = i.id_usuario
   inner join edital e ON e.id  = i.id_edital
   order by u.Nome";


         $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');
         $resultado = $conexao->query( $sqlInscricao);
         $listaInscricao = $resultado->fetchAll();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscritos</title>
    <style>
         b{
             line-height: 30px;
         }

         p{
             padding: 10px;
         }

         body{
             margin: 0px;
             font-family: Arial, Helvetica, sans-serif; 
             background-color: #eceae7;    
         }
         .titulo{
            float: left;
            height: 500px;
            width: 100%;
            max-width: 1450px;
            text-align: center;
            display : flex;
            align-items: center;
            justify-content : center;
        }
         .curso{
          float: left;
          position: relative;
          height: 50px;
          width: 20%;
          background-color: #b00b18;
          border: 5px #b00b18;
          text-align: center;
          display : flex;
          align-items: center;
          justify-content : center;
          text-decoration: none;
          color: white;
         }

         .cabeçario{
             float: left;
             width: 33%;
         }
         .cab1{
             float: left;
             height: 200px;
             padding: none;
         }

         .cab2{
             padding-left: 40px;
             padding-right: 40px;
             float: center;
             height: 200px;
             align-items: center;
             justify-content : center;
         }

         .cab3{
             height: 200px;
             float: right;
         }

         .h1{
             float: left;
             width: 100%;
             text-align: center;
             color: #151d20;
             border: 10px;
         }
        .separacao{
            float: left;
            background-color: #b00b18;
            width: 100%;
            color: white;
            text-align: center;
            height: 10px;
        }
         .detalhe{
             color: #b00b18;
             padding-top: 0px;
             margin-top: 0px;
         }

         .rodape{
             background-color: #2e3e46;
             height: 300px;
             padding-bottom: 40px;
         }

         .fatec{
             float: left;
             margin-left: 15px;
             background-color: #2e3e46;
             width: 40%;
             color: white;
             padding-bottom: 40px;
             height: 250px;
         }

         .sp{
             float: left;
             background-color: #2e3e46;
             width: 30%;
             color: white;
             padding-bottom: 40px;
             height: 250px;
         }

         .centro{
             float: left;
             background-color: #2e3e46;
             width: 20%;
             color: white;
             padding-bottom: 40px;
             height: 250px;
         }

         .imagem{
             float: center;
             height: 200px;
             width: 400px;
             margin-top: 50px;
         }

         .direito{
             background-color: #151d20;
             width: 100%;
             color: white;
             text-align: center;
             margin: 0px;
         }

         .form{

             margin-left: 10px;
         }

         .label{
            width: 100px;
            margin: 10px;
         }
         .input{
            width: 300px;
            margin: 10px;
         }
         .h1{
            float: left;
            width: 100%;
            text-align: center;
            color: #151d20;
            border: 10px;
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
                <td> <?php echo $linha ['N_edital']?></td>
                <td> <?php echo $linha ['nome']?></td>
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
           <b>Todos os direitos reservados</b>
       </div>
</body>
</html>