<?php
class saudeDao
{
    function listar($id)
    {
        // $conn = new PDO('mysql:host=localhost;dbname=Marvel', 'root', '');
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $consultar1 = $conn->query("select * from doenca;");
        // $consultar2 = $conn->query("select * from doenca;");
        echo "<!DOCTYPE html>"
            . "<html lang='pt-br'>"
            . "<head>"
            . "<meta charset='UTF-8'>"
            . "<title>Marvel</title>"
            . "<script src='../view/js/simulator.js'></script>"
            . "<link rel='stylesheet' href='../view/style/index.css'>"
            . "<link rel='stylesheet' href='../view/style/simulator.css'>"
            . "<link rel='stylesheet' href='../view/style/tabs.css'>"
            . "<script src='../view/js/tabs.js'></script>"
            . "<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDepHZ5AK-NRRPtAFzpohjrJo_k2jxNupg&libraries=places'></script>"
            . "<link rel='stylesheet' href='../view/style/maps.css'>"
            . "<script src='../view/js/maps.js'></script>"
            . "</head>"
            . "<body>"
            . "<header>"
            . "<div class='logo'> Marvel </div>"
            . "<div class='nav-menu'>"
            . "<ul>"
            . "<li><a href='#'>Home</a></li>"
            . "<li><a href='#'>Simulator</a></li>"
            . "</ul>"
            . "</div>"
            . "</header>"
            . "<div class='simulator'>"
            . "<form action='../controller/saudeController.php' method='post'>"
            . "<div class='selector-save'>"
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
            . "<div class='option-panel'>";
        // while ($linha = $consultar1->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='tab'>"
                . "<button class='tablinks' onclick='openCity(event, `{linha['Nome']}`)'>{linha['Nome']}</button>"
                . "</div>";
        // }
        echo "</div>";
        // while ($linha = $consultar2->fetch(PDO::FETCH_ASSOC)) {
            echo "<div id='div-{linha['Nome']}' class='tabcontent'>"
                . "<h3>{linha['Nome']}</h3>"
                . "<p>London is the capital city of England.</p>"
                . "</div>";
        // }
        echo "<div class='map'><h3>Locais</h3>"
        ."<div id='map-canvas'></div></div>";
        // header('location: ../view/index.php');

    }
}
