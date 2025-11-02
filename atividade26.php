<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 26 - Aprovação de Projeto</title>";
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

echo "<h2>Atividade 26</h2>";
echo "<p>Verificar a aprovação de um projeto com base em custo, prazo e qualidade</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='custo'>Custo do projeto (R$):</label>";
echo "<input type='number' id='custo' name='custo' step='0.01' required min='0'>";

echo "<label for='prazo'>Prazo (em dias):</label>";
echo "<input type='number' id='prazo' name='prazo' required min='0'>";

echo "<label for='qualidade'>Qualidade (nota de 0 a 10):</label>";
echo "<input type='number' id='qualidade' name='qualidade' step='0.1' required min='0' max='10'>";

echo "<button type='submit'>Avaliar Projeto</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $custo = $_POST['custo'];
    $prazo = $_POST['prazo'];
    $qualidade = $_POST['qualidade'];

    $custoFormatado = "R$ " . number_format($custo, 2, ',', '.');

    if ($custo < 10000) {
        if ($prazo < 30) {
            if ($qualidade >= 8) {
                echo "<div class='resultado'>✅ Projeto aprovado!</div><hr>";
            } else {
                echo "<div class='resultado'>❌ Projeto rejeitado por baixa qualidade (nota $qualidade).</div><hr>";
            }
        } else {
            echo "<div class='resultado'>❌ Projeto rejeitado por prazo elevado ($prazo dias).</div><hr>";
        }
    } else {
        echo "<div class='resultado'>❌ Projeto rejeitado por custo alto ($custoFormatado).</div><hr>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade25.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade27.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
