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
        <h2>Questão 1: resultado </h2>
    </header>

    <main>

   <?php
$valor = (int)$_POST["valor"];
echo "O antecessor de $valor é " . ($valor - 1);
    ?>

    </main>
</body>


</html>