<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Ano de Nascimento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        $idade = 19;
        $ano_atual = 2025;
        $ano_nascimento = $ano_atual - $idade;
        echo "<p>Você nasceu em $ano_nascimento.</p>";
        ?>
    </div>
</body>
</html>