<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 29 - Avaliar o risco de uma viagem</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
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
        max-width: 300px;
        margin: 0 auto 20px auto;
    }
    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 200;
        color: #333;
        font-size: 14px;
    }
    input[type='number'], select {
        padding: 10px;
        width: 50%;
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

echo "<h2>Atividade 29</h2>";
echo "<p>Avaliar o risco de uma viagem com base em distância, clima e preparo</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='distancia'>Distância da viagem (km):</label>";
echo "<input type='number' id='distancia' name='distancia' min='0' required>";

echo "<label for='chuva'>Está chovendo?</label>";
echo "<select id='chuva' name='chuva' required>";
echo "<option value='false'>Não</option>";
echo "<option value='true'>Sim</option>";
echo "</select>";

echo "<label for='preparo'>Veículo está preparado?</label>";
echo "<select id='preparo' name='preparo' required>";
echo "<option value='true'>Sim</option>";
echo "<option value='false'>Não</option>";
echo "</select>";

echo "<button type='submit'>Avaliar Risco</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $distancia = floatval($_POST['distancia']);
    $chuva = $_POST['chuva'] === 'true';
    $preparo = $_POST['preparo'] === 'true';

    echo "<hr>";

    if ($distancia > 100) {
        if (!$chuva) {
            if ($preparo) {
                echo "<div class='resultado'>🚗 Risco baixo — Viagem longa, mas com boas condições e veículo preparado.</div>";
            } else {
                echo "<div class='resultado'>⚠️ Risco moderado — Clima favorável, porém o veículo não está preparado.</div>";
            }
        } else {
            echo "<div class='resultado'>🌧️ Risco alto — Chuva e longa distância aumentam o risco.</div>";
        }
    } else {
        if ($chuva) {
            echo "<div class='resultado'>☔ Risco moderado — Distância curta, mas chovendo.</div>";
        } else {
            echo "<div class='resultado'>✅ Risco baixo — Distância curta e clima bom.</div>";
        }
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade28.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade30.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
