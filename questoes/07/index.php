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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

    <?php
$numero = 5;
$fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}

echo "Fatorial de $numero é $fatorial";
    ?>

    </main>
</body>


</html>