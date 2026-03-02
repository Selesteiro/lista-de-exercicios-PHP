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
        <h2>Questão 07: Resultado </h2>
    </header>

    <main>

    <?php
$n = (int)$_POST["numero"];

if ($n < 0) {
    echo "Não existe fatorial de número negativo.";
    exit;
}

$fatorial = 1;
$expressao = "";

if ($n == 0 || $n == 1) {
    $fatorial = 1;
    $expressao = "1";
} else {
    for ($i = $n; $i >= 1; $i--) {
        $fatorial *= $i;
        $expressao .= $i;
        if ($i > 1) {
            $expressao .= ".";
        }
    }
}

echo $n . "!=" . $expressao . "=" . $fatorial;
?>

    </main>
</body>

<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>


</html>