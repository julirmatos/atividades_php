<?php

echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 5 - Comparar se dois números são iguais</title>";
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
</style>";
echo "</head>";
echo "<body>";

echo "<h2>Atividade 5</h2>";
echo "<p>Comparar se dois números são iguais</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='num1'>Digite o primeiro número:</label>";
echo "<input type='number' id='num1' name='num1' required>";

echo "<label for='num2'>Digite o segundo número:</label>";
echo "<input type='number' id='num2' name='num2' required>";

echo "<button type='submit'>Comparar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 == $num2) {
        echo "<div class='resultado'>Os números $num1 e $num2 são <strong>iguais ✅</strong></div>";
    } else {
        echo "<div class='resultado'>Os números $num1 e $num2 são <strong>diferentes ❌</strong></div>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade4.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade6.php' class='nav-btn'>➡️ Próxima </a>";

echo "</body>";
echo "</html>";
?>

