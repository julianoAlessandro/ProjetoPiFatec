<?php
session_start();// primeira instrução
ob_start();
include_once 'conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

	<title> Login Administrador </title> 
	<link rel="stylesheet" type="text/css" href="loginAdm.css"> 
</head>  
	<body>
        <?php
        //Exemplo de criptografia de senha
//echo password_hash(123456,PASSWORD_DEFAULT);


?>
  
    <?php
/*
$email = $_POST['email'];
$senha = $_POST['senha'];
echo "Seu email e:$email<br> ja sua senha: $senha";
*/




$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
//var_dump($dados);
// so acessa quando clicar

if(!empty($dados['enviaLogin'])){
   //var_dump($dados);
   $query_usuario ="SELECT  id, email, senha FROM usuarios WHERE email =:email LIMIT 1";
   $result=$conexao ->prepare($query_usuario);
   $result->bindParam(':email',$dados['email']);
   $result ->execute();
   if(($result) AND ($result ->rowCount()!= 0)){
      $linha = $result ->fetch(PDO::FETCH_ASSOC);
      //var_dump($linha);
      if(password_verify($dados['senha'],$linha['senha'])){
         $_SESSION['id'] = $linha['id'];
         $_SESSION['senha'] = $linha['senha'];
         header("location:usuarioLogado.php");
         
      }
      else{
        $_SESSION['msg'] = "<p style='color: #ff0000'>Senha ou usuario incorreto, tente novamente!</p>";
      }

   }
   else{
      $_SESSION['msg'] = "<p style='color: #ff0000'>Senha ou usuario incorreto,tente novamente!</p>";

   }
   if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
      
   }
 
}

 
  

?>
    

     
 
	<form action="" method="POST">
    <fieldset>
    <h1>login Administrador</h1>
    <label for="email">Email:</label>
    <input class="botao" type="text" name="email" placeholder="Digite o email" value="<?php if(isset($dados['email'])){echo $dados['email'];}?>"><br>
    <label for="senha">Senha:</label>
    <input  class="botao"type="password" name="senha" placeholder="Digite sua senha" value = "<?php if(isset($dados['senha'])){echo $dados['email'];}?>"><br>
    <input  class="botao2" type="submit" value="ENIVAR" name="enviaLogin">


    </form>
</fieldset>
	
      
	  
	  </body>
	  </html> 
	  
	  
	 