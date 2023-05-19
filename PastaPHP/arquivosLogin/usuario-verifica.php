<?php

session_start();
if(isset($_SESSION['usuario-logado.php'])){
    header('usuario-nao-logado.php');
}

?>