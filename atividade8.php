<?php

echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 8 - Verificar se uma pessoa é adolescente</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
        text-align: center;
    }
    h2 {
        color: #333;
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
        max-width: 250px;
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
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
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
</style>";
echo "</head>";
echo "<body>";

echo "<h2>Atividade 8</h2>";
echo "<p>Verificar se uma pessoa é adolescente</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='idade'>Digite a idade:</label>";
echo "<input type='number' id='idade' name='idade' required min='0'>";
echo "<button type='submit'>Verificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idade = $_POST['idade'];

    if ($idade >= 13 && $idade <= 17) {
        echo "<div class='resultado'>Com $idade anos, a pessoa é <strong>adolescente ✅</strong></div>";
    } else {
        echo "<div class='resultado'>Com $idade anos, a pessoa <strong>não é adolescente ❌</strong></div>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade6.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade8.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
