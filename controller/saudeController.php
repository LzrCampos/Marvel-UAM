<?php
    include('../model/saudeDao.php');

    $btnBuscar = $_POST['buscar'];
    $doenca = new saudeDao();

    if ($btnBuscar == "buscar") {
        $doenca->listar($_POST['slcSintoma1'], $_POST['slcSintoma2'], $_POST['slcSintoma3']);
    }
?>
