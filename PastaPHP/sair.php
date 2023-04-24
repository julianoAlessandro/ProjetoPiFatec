<?php
session_start();
ob_start();
unset($_SESSION['id'],$_SESSION['email'],$_SESSION['senha']);
//$_SESSION['msg'] = "<p style='color: green'>Deslogado com sucesso</p>";
header("location:loginAdm.php");




?>