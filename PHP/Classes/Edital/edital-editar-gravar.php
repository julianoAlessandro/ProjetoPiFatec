<?php
    require_once "classes/Edital.php";
    $idEdital = $_POST['id'];
    $novoStatus = $_POST['status'];
    $edital = new Edital($idEdital);
    
    $edital->StatusEdital = $novoStatus;
    $edital->atualizar();
    header('Location: listarEditais.php');
?>



