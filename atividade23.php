<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividade 23 - Elegibilidade para Empréstimo</title>";
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
    input[type='text'], input[type='number'], select {
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

echo "<h2>Atividade 23</h2>";
echo "<p>Determinar a elegibilidade para um empréstimo com base em renda e histórico</p>";

echo "<div class='card'>";
echo "<form method='post'>";
echo "<label for='renda'>Renda mensal (R$):</label>";
echo "<input type='text' id='renda' name='renda' required placeholder='Ex: R$ 2.500,00'>";
echo "<label for='historico'>Histórico de crédito (anos):</label>";
echo "<input type='number' id='historico' name='historico' min='0' step='1' required>";
echo "<label for='dividas'>Possui dívidas pendentes?</label>";
echo "<select id='dividas' name='dividas' required>";
echo "<option value='nao'>Não</option>";
echo "<option value='sim'>Sim</option>";
echo "</select>";
echo "<button type='submit'>Verificar</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Converte o valor de entrada "R$ 2.500,00" em número
    $rendaStr = $_POST['renda'];
    $renda = floatval(str_replace([',', 'R$', '.', ' '], ['.', '', '', ''], $rendaStr));
    $historico = $_POST['historico'];
    $dividas = $_POST['dividas'];

    if ($renda > 2000) {
        if ($historico >= 2) {
            if ($dividas === 'nao') {
                echo "<div class='resultado'>✅ Empréstimo aprovado!</div><hr>";
            } else {
                echo "<div class='resultado'>❌ Empréstimo rejeitado por dívidas pendentes.</div><hr>";
            }
        } else {
            echo "<div class='resultado'>❌ Empréstimo rejeitado por histórico de crédito insuficiente.</div><hr>";
        }
    } else {
        echo "<div class='resultado'>❌ Empréstimo rejeitado por renda insuficiente.</div><hr>";
    }
}

echo "</div>";

echo "<a href='index.php' class='nav-btn'>🏠 Início</a>";
echo "<a href='atividade22.php' class='nav-btn'>⬅️ Anterior</a>";
echo "<a href='atividade24.php' class='nav-btn'>➡️ Próxima</a>";

echo "<script>
// Máscara automática para formato de moeda brasileira (R$)
document.getElementById('renda').addEventListener('input', function(e) {
    let value = e.target.value.replace(/[R$ .]/g, '').replace(',', '');
    if (!value) return e.target.value = '';
    value = (parseFloat(value) / 100).toFixed(2);
    value = value.replace('.', ',');
    e.target.value = 'R$ ' + value.replace(/\\B(?=(\\d{3})+(?!\\d))/g, '.');
});
</script>";

echo "</body>";
echo "</html>";
?>
