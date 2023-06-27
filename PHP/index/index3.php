<?php 
require_once "classes/Edital.php";
$edital = new Edital();
$listarEdital = $edital->listar();
?>


<DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área do Professor</title>
    <meta charset="utf-8">
    <style type="text/css">
            p{
                padding: 10px;
            }

            body{
                margin: 0px;
                font-family: Arial, Helvetica, sans-serif; 
                background-color: #eceae7;    
            }
            .começo{
                float: left;
                position: relative;
                height: 50px;
                width: 25%;
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
            
            .main-esquerda{
                float: left;
                width: 20%;    
                height: 100%;
            }
            .detalhe{
                color: #b00b18;
                padding-top: 0px;
                margin-top: 0px;
            }

            .rodape{
                float: left;
                background-color: #2e3e46;
                height: 250px;
                width: 100%;
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
                float: left;
                background-color: #151d20;
                width: 100%;
                color: white;
                text-align: center;
            }
            .h1{
                float: left;
                width: 100%;
                text-align: center;
                color: #151d20;
                border: 10px;
            }

            
            .corpoEdital{
                float: left;
                margin-left: 10px;
                width: 40%;
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

            .meio{
                background-color: white;
                float: left;
                width: 60%;
                margin-bottom: 30px;
                border: 8px solid white;
                box-shadow: 1px 1px 2px rgb(129, 128, 128);
                border-radius: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
            }



    </style>
</head>

<body>

    <div id="topo">
        <div class="cabeçario">
            <img src="img/sp2.png" class="cab1">
        </div>

        <div class="cabeçario">
            <a href="index3.php"><img src="img/fatec2.png" class="cab2"></a>
        </div>

        <div class="cabeçario">
            <img src="img/itapira2.png" class="cab3">
        </div>
    </div>

    <div class="separacao"></div>

    <div>
        <img src="img/fatec.jpg" class="titulo">
    </div>

    <a href="index3.php">
        <div class="começo">
            <p>Início</p>
        </div>
    </a>

    <a href="Inscricao.php?acao=listar">
        <div class="começo">
            <p>Editais</p>
        </div>
    </a>

    <a href="documentos.php">
        <div class="começo">
            <p>Meus Documentos</p>
        </div>
    </a>

    <a href="usuario-logout.php">
        <div class="começo">
            <p>Sair</p>
        </div>
    </a>

    <div class="h1">   
        <h1>Bem Vindo!!!</h1>
    </div>

    <br>

    <script>
    function inserir_inscricao(id_edital, numero_edital){
        let confirmAction = confirm("Deseja realmente se candidatar no edital número " 
                                      + numero_edital + " ? Certifique-se que já fez o upload de todos os documentos necessários.");
        if (confirmAction) {
          window.location.href='http://localhost/pi-atualizado/Classes/Inscricao.php?id_edital='+id_edital;
          alert("Inscrição efetuada com sucesso.");
        } else {
          alert("Ação cancelada.");
        }
    }
    </script>

    <div class="main-esquerda"></div>

    <div class="meio"> <!-- Conteúdo Central -->
        <h1 id="titulomain">Editais Interno de Oferecimento de Aulas</h1>
        <h2 id="conteudomainatualizado">Atualizado: 27/06/2023</h2>


        <table id="horarios" style="text-indent: 0em;">
            <tbody>
                <tr>
                  <th>Edital</th>
                  <th>Curso</th>
                  <th>Disciplina</th>
                  <th>Carga <br>Horária</th>
                  <th>Horário </th>
                  <th>Prazo</th>
                </tr>

                <?php
                
                    foreach($listarEdital as $linha):
                    $nome_curso = mb_convert_encoding($linha['sigla_curso'], "UTF-8");
                    $horario = mb_convert_encoding($linha['horario'], "UTF-8");
                    $disciplina = mb_convert_encoding($linha['Nome_Disciplina'], "UTF-8");
                    
                    $n_edital = $linha['N_edital'];
                    
                    $inscr_enabled = "";
                    $inscr_label = "Inscrição";
                    if($linha['qtde_inscricoes'] > 0){
                        $inscr_enabled = "disabled";
                        $inscr_label = "Já inscrito";
                    }
                        
                    
                    echo ("<tr>");
                        echo("<td><a href='{$linha['arquivosEdital']}'><img src='img/doc.png' alt='Baixar' width=30 height=30 align=center></a>");
                        echo("</td>");
                        echo("<td>{$nome_curso}</td>");
                        echo("<td>{$disciplina}</td>");
                        echo("<td>{$linha['cargaHoraria']}</td>");
                        echo("<td>{$horario}<br></td>");
                        echo("<td>{$linha['prazo']}</td>");
                        $id_edital = $linha['id'];
                        echo("<td><input type='button' value='{$inscr_label}' onclick=\"inserir_inscricao({$id_edital}, '{$n_edital}')\" {$inscr_enabled}></td>");
                    echo ("</tr>");
                    
                    endforeach
                        
                ?>          
                
            </tbody>
        </table>

        <p id="conteudomain" style="text-indent: 0em; font-size: 12px;"><b>Legenda:</b>
        </p><ul style="font-size: 12px;">
            <li>GTI - Gestão da Tecnologia da Informação</li>
            <li>GPI - Gestão da Produção Industrial</li>
            <li>GE - Gestão Empresarial</li>
            <li>DSM - Desenvolvimento de Software Multiplataforma</li>
            <li>Det. - Determinado</li>
            <li>Ind. - Indeterminado</li>
        </ul>

    </div> <!-- Fim Conteúdo Central --> 
    
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