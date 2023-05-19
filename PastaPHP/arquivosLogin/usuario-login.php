<?php
require_once 'usuario-verifica.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios 
WHERE usuario = '{$usuario}' and senha = '{$senha}'";

$conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
$resultado = $conexao->query($sql);
$linha = $resultado->fetch();
$usuario_logado = $linha['usuario'];

if($usuario_logado == null) {
    header('Location: usuario-erro.php');
} else {
    session_start();
    $_SESSION['usuario_logado'] = $usuario_logado;
    header('Location: index2.php');
}
?>
