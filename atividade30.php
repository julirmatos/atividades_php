<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 30 - Determinar a categoria de um atleta</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #eef3f8;
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
    input[type='number'] {
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

echo "<h2>Atividade 30</h2>";
echo "<p>Determinar a categoria de um atleta com base em idade, peso e experiência</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='idade'>Idade do atleta:</label>";
echo "<input type='number' id='idade' name='idade' min='0' required>";

echo "<label for='peso'>Peso do atleta (kg):</label>";
echo "<input type='number' id='peso' name='peso' min='0' step='0.1' required>";

echo "<label for='experiencia'>Tempo de experiência (anos):</label>";
echo "<input type='number' id='experiencia' name='experiencia' min='0' required>";

echo "<button type='submit'>Classificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idade = floatval($_POST['idade']);
    $peso = floatval($_POST['peso']);
    $experiencia = floatval($_POST['experiencia']);

    echo "<hr>";

    if ($idade >= 18 && $idade <= 35) {
        if ($peso <= 80) {
            if ($experiencia > 2) {
                echo "<div class='resultado'>🏆 Profissional — Idade adequada, peso leve e experiência comprovada.</div>";
            } else {
                echo "<div class='resultado'>💪 Amador — Idade e peso ideais, mas pouca experiência.</div>";
            }
        } else {
            echo "<div class='resultado'>⚖️ Iniciante — Peso acima do ideal para a categoria.</div>";
        }
    } else {
        echo "<div class='resultado'>🚫 Fora da faixa etária — Não se enquadra na categoria de atletas adultos (18 a 35 anos).</div>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade29.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade31.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>

