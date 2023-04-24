<?php
session_start();// primeira instrução
ob_start();
include_once 'conecta.php';

/*
$email = $_POST['email'];
$senha = $_POST['senha'];
echo "Seu email e:$email<br> ja sua senha: $senha";
*/
//Exemplo de criptografia de senha
//echo password_hash(123456,PASSWORD_DEFAULT);




$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
//var_dump($dados);

if(!empty($dados['enviaLogin'])){
  // var_dump($dados);
   $query_usuario ="SELECT  id, email, senha FROM usuarios WHERE email = '".$dados['email']."' LIMIT 1";
   $result=$conexao ->prepare($query_usuario);
   $result ->execute();
   if(($result) AND ($result ->rowCount()!= 0)){
      $linha = $result ->fetch(PDO::FETCH_ASSOC);
      //var_dump($linha);
      if(password_verify($dados['senha'],$linha['senha'])){
         $_SESSION['id'] = $linha['id'];
         header("location:usuarioLogado.php");
         
      }
      else{
         $_SESSION['msg'] = "<p style='color: #ff0000'>Senha invalida!</p>";
      }

   }
   else{
      $_SESSION['msg'] = "<p style='color: #ff0000'>Usuarios invalido!</p>";

   }
   if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
      
   }
 
}

 
  

?>