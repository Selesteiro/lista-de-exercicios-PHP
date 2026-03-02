<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 09: Resultado</h2>
    </header>

    <main>

<?php
$nome = $_POST["nome"];
$idade = (int)$_POST["idade"];

$dias = $idade * 365;

echo "$nome possui aproximadamente $dias dias de vida.";
?>

    </main>
</body>

<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>


</html>