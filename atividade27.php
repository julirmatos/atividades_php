<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 27 - Divisibilidade por 2, 3 e 5</title>";
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
        max-width: 340px;
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
        width: 40%;
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

echo "<h2>Atividade 27</h2>";
echo "<p>Determinar se um número é divisível por 2, 3 e 5 em sequência</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='numero'>Digite um número inteiro:</label>";
echo "<input type='number' id='numero' name='numero' required>";
echo "<button type='submit'>Verificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
        if ($numero % 3 == 0) {
            if ($numero % 5 == 0) {
                echo "<div class='resultado'>✅ O número $numero é divisível por 2, 3 e 5.</div><hr>";
            } else {
                echo "<div class='resultado'>❌ O número $numero não é divisível por 5.</div><hr>";
            }
        } else {
            echo "<div class='resultado'>❌ O número $numero não é divisível por 3.</div><hr>";
        }
    } else {
        echo "<div class='resultado'>❌ O número $numero não é divisível por 2.</div><hr>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade26.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade28.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
