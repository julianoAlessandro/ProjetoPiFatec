<?php
session_start();
session_destroy();
header('location:LoginAdministrador.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saida</title>
</head>
<body>
    <h3>Voce saiu do Sistema</h3>
</body>
</html>