<?php
require_once 'usuario-verifica.php';
session_start();
session_destroy();
header('location:login.html');


?>