<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 18 - Tipo de Triângulo</title>";
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
        width: 60%;
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

echo "<h2>Atividade 18</h2>";
echo "<p>Determinar o tipo de triângulo com base nos lados</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='lado1'>Lado 1:</label>";
echo "<input type='number' id='lado1' name='lado1' required min='1'>";
echo "<label for='lado2'>Lado 2:</label>";
echo "<input type='number' id='lado2' name='lado2' required min='1'>";
echo "<label for='lado3'>Lado 3:</label>";
echo "<input type='number' id='lado3' name='lado3' required min='1'>";
echo "<button type='submit'>Classificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    
    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "<div class='resultado'>Triângulo equilátero 🔺</div><hr>";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "<div class='resultado'>Triângulo isósceles 🔻</div><hr>";
        } else {
            echo "<div class='resultado'>Triângulo escaleno ⚙️</div><hr>";
        }
    } else {
        echo "<div class='resultado'>Esses valores não formam um triângulo ❌</div><hr>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade17.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade19.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
