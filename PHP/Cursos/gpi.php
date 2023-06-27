<?php
require_once "classes/Edital.php";
$edital = new Edital();
$listarGPI = $edital->listarGPI();


session_start();
$_SESSION['usuario'] = "radmilalopes@yahoo.com.br";
$_SESSION['nome_usuario'] = "Radmila Aparecida Lopes";
$_SESSION['id'] = 3;
?>

<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="scripts/regras.css">
    <title>Portal de Editais</title>
    <style>
        .icone{
            height: 10px;
            width: 10px;
        }
        
    </style>
</head>

<body>
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

    <a href="dsm.php">
        <div class="curso">
            <p>Desenvolvimento de Software Multiplataforma</p>
        </div>
    </a>

    <a href="gpi.php">
        <div class="curso">
            <p>Gestão da Produção Industrial</p>
        </div>
    </a>

    <a href="ge.php">
        <div class="curso">
            <p>Gestão Empresarial</p>
        </div>
    </a>

    <a href="gti.php">
        <div class="curso">
            <p>Gestão da Tecnologia da Informação</p>
        </div>
    </a>

    <a href="login.html">
        <div class="curso">
            <p>Login</p>
        </div>
    </a>

    <div class="h1">   
        <h1>Editais Abertos</h1>
    </div>

    <br>

    <div class="main-esquerda"></div>

    <div class="meio"> <!-- Conteúdo Central -->
        <h1 id="titulomain">Editais Interno de Oferecimento de Aulas</h1>
        <h2 id="conteudomainatualizado">Atualizado: 27/06/2023</h2>


        <table id="horarios" style="text-indent: 0em;">
            <tbody>
                <tr>
                    <th>Arquivo</th>
                    <th>Edital</th>
                    <th>Curso</th>
                    <th>Disciplina</th>
                    <th>Carga <br>Horária</th>
                    <th>Horário </th>
                    <th>Prazo</th>
                </tr>


                
                <?php
                
                    foreach($listarGPI   as $linha):
                    $nome_curso = mb_convert_encoding($linha['sigla_curso'], "UTF-8");
                    $horario = mb_convert_encoding($linha['horario'], "UTF-8");
                    $disciplina = mb_convert_encoding($linha['Nome_Disciplina'], "UTF-8");
                    
                    $n_edital = $linha['N_edital'];
                    
                    $inscr_enabled = "";
                    $inscr_label = "Inscrição";

                        
                    
                    echo ("<tr>");
                        echo("<td><a href='{$linha['arquivosEdital']}'><img src='img/doc.png' alt='Baixar' width=30 height=30 align=center></a>");
                        echo("</td>");
                        echo("<td>{$n_edital}</td>");
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

    <header class="header">

        <a href="https://api.whatsapp.com/send?phone=5519989589150&amp;text=" target="_Blank"><img class="whatsapp-img2" src="img/whatsapp.png" alt="whatsapp" class="header"></a>

        <br>

        <img class="header" src="img/telefone.png" alt="telefone">

        <br>

        <a href="https://www.youtube.com/channel/UChyGJgx8OzKqhHJBDaKdOZA" target="_blank"><img class="header" src="img/youtube.png" alt="youtube Fatec"></a>

        <br>

        <a href="https://www.facebook.com/fatecitapira" target="_blank"><img class="header" src="img/facebook.png" alt="Facebook Fatec"></a>

        <br>


        <a href="https://twitter.com/fitapira" target="_blank"><img class="header" src="img/twitter.png" alt="twitter Fatec"></a>

        <br>

        <a href="https://www.instagram.com/fatecdeitapira/" target="_blank"><img class="header" src="img/instagram.png" alt="instagram Fatec"></a>
    
    
    </header>

    <a href="#topo" class="ancora">
        <button type="submit" class="ancora">^</button>
    </a>
   
   <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.9454654033666!2d-46.8366376854121!3d-22.431078326707436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8fe07cf78fddb%3A0x5e16e6e02b37ddc2!2sFatec%20Itapira%20-%20%22Dr.%20Ogari%20de%20Castro%20Pacheco%22!5e0!3m2!1spt-BR!2sbr!4v1667865631564!5m2!1spt-BR!2sbr" width="1300" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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