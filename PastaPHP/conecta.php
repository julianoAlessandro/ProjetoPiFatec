<?php
try{
    $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=loginadministrador','root','');
   // echo "Conexao com o banco de dados realizado com sucesso!<br><br>";
}
catch(PDOException $err){
    echo "Erro:Conexao nao foi realizada com sucesso<br> erro gerado ". $err->getMessage();

}

  



?>