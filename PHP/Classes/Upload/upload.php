<?php
$action = $_GET['action'];
$ids = $_GET['ids'];


// Conectar ao banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco_editais";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


if($action == "excluir"){
	
	 $sql = "DELETE from documentos where id in($ids)";
	 
	 echo($sql);
	 
	 
    if ($conn->query($sql) === TRUE) {
        echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/pi-atualizado/documentos.php';
    </script>");
		} else {
        echo "Erro ao excluir arquivo: " . $conn->error;
    }
} 

else




// Verificar se um arquivo PDF foi enviado
if ($_FILES["pdfFile"]["error"] == UPLOAD_ERR_OK) {
    $pdfTmpName = $_FILES["pdfFile"]["tmp_name"];
    $pdfName = $_FILES["pdfFile"]["name"];

    // Ler o conteúdo do arquivo PDF
    $pdfContent = file_get_contents($pdfTmpName);

    // Escapar caracteres especiais para evitar injeção de SQL
    $pdfContent = $conn->real_escape_string($pdfContent);

    // Inserir o arquivo PDF no banco de dados
    $sql = "INSERT INTO documentos (nome, arquivo, datahora) VALUES ('$pdfName', '$pdfContent', now())";
    if ($conn->query($sql) === TRUE) {
        echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/pi-atualizado/documentos.php';
    </script>");
		} else {
        echo "Erro ao fazer upload do arquivo: " . $conn->error;
    }

}

$conn->close();



?>