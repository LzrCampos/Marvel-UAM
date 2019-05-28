<?php
class saudeDao
{
    function listar($id) {
        //$conn = new PDO('mysql:host=localhost;dbname=Marvel','root', '');
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$consultar = $conn->query("select * from doenca;");
        // while ($linha = $consultar->fetch(PDO::FETCH_ASSOC)) {
        //     echo "<html> <body><br>Nome: {$linha['Nome']} <br>"
        //     . "Descricao: {$linha['Descricao']}<br>"
        //     . "Precaucao: {$linha['Precaucao']}<br><br>"
        //     . "</body> </html>";
        // }
        echo "<!DOCTYPE html>"
        . "<html lang='pt-br'>"
        . "<head>"
        . "<meta charset='UTF-8'>"
        . "<title>Marvel</title>"
        . "<script src='../view/js/simulator.js'></script>"
        . "<link rel='stylesheet' href='../view/style/index.css'>"
        . "<link rel='stylesheet' href='../view/style/simulator.css'>"
        ."</head>"
        . "<body>"
        . "<header>"
        . "<div class='logo'> Marvel </div>"
        . "<div class='nav-menu'>"
        . "<ul>"
        . "<li><a href='#'>Home</a></li>"
        . "<li><a href='#'>Simulator</a></li>"
        . "<li><a href='#'>History</a></li>"
        . "<li><a href='#'>About</a></li>"
        . "<li><a href='#'>Contact us</a></li>"
        . "</ul>"
        . "</div>"
        . "</header>"
        . "<div class='simulator'>"
        . "<form action='../controller/saudeController.php' method='post'>"
        ."<div class='selector-save'>"
        . "<select name='slcSintoma1' id='slcSintoma1' class='slcSintoma'>"
        . "<option value=''></option>"
        . "</select>"
        . "<select name='slcSintoma2' id='slcSintoma2' class='slcSintoma'>"
        . "<option value=''></option>"
        . "</select>"
        . "<select name='slcSintoma3' id='slcSintoma3' class='slcSintoma'>"
        . "<option value=''></option>"
        . "</select>"
        . "<button class='button' type='submit' name='buscar' value='buscar'>Buscar</button>"
        . "</div>"
        . "</form>"
        . "<div class='panel-results'>"
        . "<div class='option-panel'>"
        . "<div class='option-button btnActive' id='btnActive'>";
        //while ($linha = $consultar->fetch(PDO::FETCH_ASSOC)) {
        echo "<h1>{'linha'['Nome']}</h1>"
        . "</div>"
        . "<div class='option-button'>"
        . "<h1>Doença</h1>"
        . "</div>"
        . "<div class='option-button'>"
        . "<h1>Doença</h1>"
        . "</div>"
        . "<div class='option-button'>"
        . "<h1>Doença</h1>"
        . "</div>"
        . "<div class='option-button'>"
        . "<h1>Doença</h1>"
        . "</div>"
        . "</div>"
        . "<div class='panel-result'>"
        . "<div class='panel-desc'>"
        . "<h2>Descrição</h2>"
        . "<p>{'linha'['Descricao']}</p>"
        . "</div>"
        . "<div class='panel-prec'>"
        . "<h2>Precauções</h2>"
        . "<p>{'linha'['Precaucao']}</p>"
        . "</div>";
        // }
        echo "<div class='panel-espe'>"
        . "<h2>Especialistas</h2>"
        . "<div class='map'>"
        . "</div>"
        . "</div>"
        . "</div>"
        . "</div>"
        . "</div>"
        . "<footer>"
        . "</footer>"
        . "</body>"
        . "</html>";
        // header('location: ../view/index.php');
    
    }
}
