<?php
require_once "ListarDocumentos.php";
$listardocumentos = new ListarDocumentos();
$listadocumento = $listardocumentos->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Documentos</title>
	 <meta charset="utf-8">
	<link  rel="stylesheet" type="text/css" href="scripts/regras.css">	
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

<script>
function obterMarcados() {
  var ids = ""; 
  var listaMarcados = document.getElementsByTagName("INPUT");
  for (loop = 0; loop < listaMarcados.length; loop++) {
     var item = listaMarcados[loop];
     if (item.type == "checkbox" && item.checked) {
        ids = ids + item.value + ",";
     }
  }
  ids = ids.substring(0, ids.length - 1);
  window.location.href='http://localhost/pi-atualizado/upload.php?action=excluir&ids=' + ids;
}
</script>

	<div class="fundo">
	</div>
	
	<div align="center">          
		  
            	<h1 class="h1">Meus Documentos</h1>
    
    	
            <table id="horarios" >
            <tbody><tr>
			<th></th>	
             <th>Arquivo</th>
             <th>Data/Hora</th>
              
            </tr>
				
                
			<?php
			foreach($listadocumento as $linha):
			$data_upload = (new DateTime($linha['datahora']))->format('d/m/Y H:i:s');
				echo "<tr>"; 
				echo "<td><input type='checkbox' name='ck{$linha['id']}' value={$linha['id']}></td>";
				echo "<td>{$linha['nome']}</td>";
				echo "<td>{$data_upload}</td>";
				echo "</tr>";
			endforeach
			?>
			
            </tbody></table>
	
            	 </form>
            	    
				<table>
				<form action="upload.php" method="POST" enctype="multipart/form-data">
				<tr><td><input type="file" name="pdfFile"></td></tr>
				<tr><td><input type="submit" value="Incluir"></td></tr>
				<tr><td><input type="button" value="Excluir" onclick="obterMarcados()"></td></tr>
				</table>
		</form>
	</div>

    <br>

   <div class="rodape">

        <div class="fatec">

            <h3 class="detalhe"><b>____</b></h3>

            <h2>Fatec Itapira</h2>

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

   </div>

   <div class="direito">
       <p id="magin">Todos os direitos reservados</p>
   </div>

</body>
</html>

