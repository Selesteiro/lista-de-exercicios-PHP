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
        <h2>Questão 06: Resultado</h2>
    </header>

    <main>
        
<?php
$nums = [(float)$_POST["n1"], (float)$_POST["n2"], (float)$_POST["n3"]];

rsort($nums);

echo "Ordem decrescente:<br>";
foreach ($nums as $n) {
  echo $n . "<br>";
}
?>

    </main>
    
</body>

<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>


</html>