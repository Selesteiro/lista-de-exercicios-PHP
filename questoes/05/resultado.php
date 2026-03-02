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
        <h2>Questão 05: Resultado</h2>
    </header>

   <main>
<?php
$n1 = (float)$_POST["n1"];
$n2 = (float)$_POST["n2"];
$n3 = (float)$_POST["n3"];

$maior = $n1;
if ($n2 > $maior) $maior = $n2;
if ($n3 > $maior) $maior = $n3;

echo "O maior número é: $maior";
?>
    </main>
</body>

<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>

</html>