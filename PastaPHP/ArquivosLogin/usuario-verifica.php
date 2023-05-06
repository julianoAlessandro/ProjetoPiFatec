<?php

session_start();
if(!isset($_SESSION['usuario_logado'])){
    // Voce não tem acesso a esta funcionalidade
    header('location:usuario-nao-logado.php');
}
echo "olaa";



?>
