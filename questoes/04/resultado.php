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
        <h2>Questão 04: Resultado</h2>
    </header>

    <main>
    <?php
$numero = (int)$_POST["numero"];

echo "<h3>Tabuada do $numero</h3>";

for ($i = 1; $i <= 10; $i++) {
  echo "$numero x $i = " . ($numero * $i) . "<br>";
}
    ?>
    </main>
</body>

<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>


</html>