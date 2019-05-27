<?php
class doencaDao
{
    function listar($id) {
        $conn = new PDO('mysql:host=localhost;dbname=Marvel','root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consultar = $conn->query("select * from doenca;");
        while ($linha = $consultar->fetch(PDO::FETCH_ASSOC)) {
            echo "<html> <body>Nome: {$linha['nome']} <br>"
            . "Nacimento: {$linha['nasc']}<br>"
            . "Sexo: {$linha['sexo']}<br><br>"
            . "</body> </html>";
        }
    }
}
?>