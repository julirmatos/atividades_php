<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 19 - Entrada no Evento</title>";
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
    input[type='number'], select {
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

echo "<h2>Atividade 19</h2>";
echo "<p>Avaliar se uma pessoa pode entrar em um evento</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='idade'>Digite a idade:</label>";
echo "<input type='number' id='idade' name='idade' required min='0'>";
echo "<label for='convite'>Possui convite?</label>";
echo "<select id='convite' name='convite' required>";
echo "<option value='sim'>Sim</option>";
echo "<option value='nao'>Não</option>";
echo "</select>";
echo "<button type='submit'>Verificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idade = $_POST['idade'];
    $convite = $_POST['convite'];

    if ($idade >= 18 || $convite === 'sim') {
        echo "<div class='resultado'>A pessoa pode entrar no evento 🎉</div><hr>";
    } else {
        echo "<div class='resultado'>A pessoa não pode entrar no evento 🚫</div><hr>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade18.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade20.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
