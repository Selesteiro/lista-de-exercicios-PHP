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
        <h2>Questão 08: Resultado</h2>
    </header>

    <main>
        
    <?php
echo "Números ímpares entre 1 e 50:<br>";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 2 != 0) echo $i . "<br>";
}
    ?>
    </main>
</body>

<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>


</html>