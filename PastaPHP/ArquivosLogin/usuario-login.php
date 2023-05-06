<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$sql = "SELECT * FROM tb_usuarios WHERE usuario = '{$usuario}' and senha='{$senha}'";
$conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=sis-escolar','root','');
$resultado = $conexao -> query($sql);// guarda o resultado da consulta sql
$linha = $resultado -> fetch();//indces associativos array associativo
$usuario_logado = $linha['usuario'];// usa a referencia do campo, aparece o valor do campo usuario

/*
echo $sql;// retorna o comando SQL
echo "<pre>";
print_r($linha);
echo "</pre>";

echo "$usuario_logado";

AQUI PODEMOS VISUALIZAR TODOS OS DADOS EM FORMATO DO ARRAY DO USUARIO INSERIDO NO LOGIN----
ALÉM DISSO PODEMOS VISUALIZAR O COMANDO SQL QUE ORIGINOU TAL RESULTADO

*/

if($usuario_logado == null){
    //VERIFICAR SE A SENHA E O USUARIO ESTÃO CORRETOS SOMENTE OS DOIS ESTANDO CORRETOS
    header('location:usuario-erro.php');
}
else{
    SESSION_START();
    $_SESSION['usuario_logado'] = $usuario_logado;
    // SESSÃO UMA VARIAVEL QUE VOCE CRIA NO SERVIDOR
    header('location:index2.php');//PAINEL DE NAVEGAÇÃO USUARIO LOGADO MENU!
}

?>
