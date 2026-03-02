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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

   <main>
<?php
$a = 10;
$b = 25;
$c = 18;

$maior = $a;

if ($b > $maior) {
    $maior = $b;
}
if ($c > $maior) {
    $maior = $c;
}

echo "O maior número é: $maior";
?>
    </main>
</body>


</html>