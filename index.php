<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Atividades PHP - Juliana R M Almeida</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
        text-align: center;
    }
    h1 {
        color: #333;
        margin-bottom: 30px;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* exatamente 3 colunas */
        gap: 20px;
        justify-items: center;
        max-width: 1000px;
        margin: 0 auto;
    }
    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 100%;
        max-width: 280px;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    a {
        text-decoration: none;
        color: #2196f3;
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }
    a:hover {
        color: #0b79d0;
    }
    @media (max-width: 900px) {
        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 600px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }
</style>";
echo "</head>";
echo "<body>";

echo "<h1>Atividades PHP - Juliana R M Almeida</h1>";
echo "<div class='grid'>";

for ($i = 1; $i <= 30; $i++) {
    echo "<div class='card'>";
    echo "<h3>Atividade $i</h3>";
    echo "<a href='atividade$i.php'>Abrir</a>";
    echo "</div>";
}

echo "</div>";
echo "</body>";
echo "</html>";
?>
