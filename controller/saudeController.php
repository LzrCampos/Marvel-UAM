<?php
    include('../model/saudeDao.php');

    $btnBuscar = $_POST['buscar'];
    $doenca = new saudeDao();


    if ($btnBuscar == "Listar") {
        $doenca->listar($_POST['id']);
    }
?>
