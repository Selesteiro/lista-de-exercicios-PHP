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
        <h2>Questão 02: resultado</h2>
    </header>

    <main>

    <?php
$metros = (float)$_POST["metros"];
$cm = $metros * 100;
echo "$metros metro(s) = $cm centímetro(s)";
    ?>
     
    </main>
</body>

<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>

</html>