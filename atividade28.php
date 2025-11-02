<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 28 - Classificar status do cliente</title>";
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
        max-width: 360px;
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

echo "<h2>Atividade 28</h2>";
echo "<p>Classificar o status de um cliente com base em compras, fidelidade e reclamações</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='compras'>Valor total de compras (R$):</label>";
echo "<input type='number' id='compras' name='compras' step='0.01' min='0' required>";

echo "<label for='fidelidade'>Tempo de fidelidade (em anos):</label>";
echo "<input type='number' id='fidelidade' name='fidelidade' min='0' required>";

echo "<label for='reclamacoes'>Possui reclamações?</label>";
echo "<select id='reclamacoes' name='reclamacoes' required>";
echo "<option value='false'>Não</option>";
echo "<option value='true'>Sim</option>";
echo "</select>";

echo "<button type='submit'>Classificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $compras = floatval($_POST['compras']);
    $fidelidade = intval($_POST['fidelidade']);
    $reclamacoes = $_POST['reclamacoes'] === 'true';

    echo "<hr>";

    if ($compras > 5000) {
        if ($fidelidade >= 3) {
            if (!$reclamacoes) {
                echo "<div class='resultado'>💎 Cliente classificado como <strong>VIP</strong>.</div>";
            } else {
                echo "<div class='resultado'>🥇 Cliente classificado como <strong>Premium</strong> (tem boas compras e fidelidade, mas possui reclamações).</div>";
            }
        } else {
            echo "<div class='resultado'>😊 Cliente classificado como <strong>Regular</strong> (boas compras, mas pouca fidelidade).</div>";
        }
    } else {
        echo "<div class='resultado'>🆕 Cliente classificado como <strong>Novo</strong> (baixo volume de compras).</div>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade27.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade29.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
