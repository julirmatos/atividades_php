<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 14 - Classificar o turno com base no horário</title>";
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
        max-width: 280px;
        margin: 0 auto 20px auto;
    }
    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 200;
        color: #333;
        font-size: 14px;
    }
    input[type='time'] {
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
    hr {
        margin: 15px auto;
        width: 80%;
        border: 0;
        border-top: 1px solid #ccc;
    }
</style>";
echo "</head>";
echo "<body>";

echo "<h2>Atividade 14</h2>";
echo "<p>Classificar o turno com base no horário</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='hora'>Selecione o horário:</label>";
echo "<input type='time' id='hora' name='hora' required>";
echo "<button type='submit'>Verificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hora = $_POST['hora']; // formato: "HH:MM"
    list($h, $m) = explode(":", $hora); // separa hora e minuto
    $horaDecimal = $h + ($m / 60); // converte para decimal

    if ($horaDecimal >= 6 && $horaDecimal < 12) {
        echo "<div class='resultado'>Turno da manhã ☀️</div><hr>";
    } elseif ($horaDecimal >= 12 && $horaDecimal < 18) {
        echo "<div class='resultado'>Turno da tarde 🌤️</div><hr>";
    } else {
        echo "<div class='resultado'>Turno da noite 🌙</div><hr>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade13.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade15.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
