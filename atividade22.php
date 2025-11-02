<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 22 - Classificar situação de um estudante</title>";
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

echo "<h2>Atividade 22</h2>";
echo "<p>Classificar a situação de um estudante com base em idade, matrícula e frequência</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='idade'>Idade:</label>";
echo "<input type='number' id='idade' name='idade' min='0' required>";
echo "<label for='matriculado'>Está matriculado?</label>";
echo "<select id='matriculado' name='matriculado' required>";
echo "<option value='sim'>Sim</option>";
echo "<option value='nao'>Não</option>";
echo "</select>";
echo "<label for='frequencia'>Frequência (%):</label>";
echo "<input type='number' id='frequencia' name='frequencia' min='0' max='100' step='1' required>";
echo "<button type='submit'>Verificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idade = $_POST['idade'];
    $matriculado = $_POST['matriculado'];
    $frequencia = $_POST['frequencia'];

    if ($idade >= 18) {
        if ($matriculado === 'sim') {
            if ($frequencia >= 75) {
                echo "<div class='resultado'>Pessoa com $idade anos é maior de idade, matriculada e regular ✅</div><hr>";
            } else {
                echo "<div class='resultado'>Pessoa com $idade anos é maior de idade, matriculada mas com frequência insuficiente ⚠️</div><hr>";
            }
        } else {
            echo "<div class='resultado'>Pessoa com $idade anos é maior de idade e não matriculada ❌</div><hr>";
        }
    } else {
        if ($matriculado === 'sim') {
            echo "<div class='resultado'>Pessoa menor de idade e matriculada 📘</div><hr>";
        } else {
            echo "<div class='resultado'>Menor de idade e não matriculada 🚫</div><hr>";
        }
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade21.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade23.php' class='nav-btn'>➡️ Próxima</a>";

echo "</body>";
echo "</html>";
?>
