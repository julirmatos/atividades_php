<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 25 - Classificar o clima</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #eef3f7;
        margin: 0;
        padding: 20px;
        text-align: center;
    }
    h2 {
        color: #222;
        margin-bottom: 10px;
    }
    p {
        color: #555;
        margin-bottom: 20px;
    }
    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 320px;
        margin: 0 auto 20px auto;
    }
    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 200;
        color: #333;
        font-size: 14px;
    }
    input[type='number'] {
        padding: 10px;
        width: 65%;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        margin-bottom: 10px;
    }
    button, .nav-btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        background-color: #2196f3;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }
    button:hover, .nav-btn:hover {
        background-color: #0b79d0;
    }
    .resultado {
        margin-top: 20px;
        font-weight: bold;
        color: #333;
    }
    hr {
        margin: 15px auto;
        width: 80%;
        border: 0;
        border-top: 1px solid #ccc;
    }
</style>";
echo "</head>";
echo "<body>";

echo "<h2>Atividade 25</h2>";
echo "<p>Classificar o clima com base em temperatura, umidade e velocidade do vento</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='temp'>Temperatura (°C):</label>";
echo "<input type='number' id='temp' name='temp' required step='0.1'>";

echo "<label for='umidade'>Umidade (%):</label>";
echo "<input type='number' id='umidade' name='umidade' required min='0' max='100'>";

echo "<label for='vento'>Velocidade do vento (km/h):</label>";
echo "<input type='number' id='vento' name='vento' required step='0.1' min='0'>";

echo "<button type='submit'>Analisar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temp = $_POST['temp'];
    $umidade = $_POST['umidade'];
    $vento = $_POST['vento'];

    if ($temp > 25) {
        if ($umidade > 70) {
            if ($vento > 20) {
                echo "<div class='resultado'>💨 Quente, úmido e ventoso</div><hr>";
            } else {
                echo "<div class='resultado'>🌞 Quente e úmido</div><hr>";
            }
        } else {
            echo "<div class='resultado'>🔥 Quente e seco</div><hr>";
        }
    } elseif ($temp >= 15 && $temp <= 25) {
        echo "<div class='resultado'>🌤️ Agradável</div><hr>";
    } else {
        echo "<div class='resultado'>❄️ Frio</div><hr>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade24.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade26.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
