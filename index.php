<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Marvel</title>

    <script src="./view/js/simulator.js"></script>

    <link rel="stylesheet" href="./view/style/index.css">
    <link rel="stylesheet" href="./view/style/simulator.css">
</head>

<body>
    <header>
        <div class="logo">
            Marvel
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Simulator</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
    </header>
    <div class="simulator">
        <form action="controller/saudeController.php" method="post">
            <div class="selector-save">
                <select name="slcSintoma1" id="slcSintoma1" class="slcSintoma">
                    <option value=""></option>
                </select>
                <select name="slcSintoma2" id="slcSintoma2" class="slcSintoma">
                    <option value=""></option>
                </select>
                <select name="slcSintoma3" id="slcSintoma3" class="slcSintoma">
                    <option value=""></option>
                </select>
                <button class="button" type="submit" name="buscar" value="buscar">Buscar</button>
            </div>
        </form>
        <div class="panel-results">
            <!-- <div class="option-panel">
                <div class="option-button btnActive" id="btnActive">
                    <h1>Doença</h1>
                </div>
                <div class="option-button">
                    <h1>Doença</h1>
                </div>
                <div class="option-button">
                    <h1>Doença</h1>
                </div>
                <div class="option-button">
                    <h1>Doença</h1>
                </div>
                <div class="option-button">
                    <h1>Doença</h1>
                </div>
            </div>
            <div class="panel-result">
                <div class="panel-desc">
                    <h2>Descrição</h2>
                    <p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="panel-prec">
                    <h2>Precauções</h2>
                    <p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="panel-espe">
                    <h2>Especialistas</h2>
                    <div class="map">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>

</html>
