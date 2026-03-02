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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>
<?php
$segundos = (int)$_POST["segundos"];

$horas = intdiv($segundos, 3600);
$resto = $segundos % 3600;
$minutos = intdiv($resto, 60);
$segundos_finais = $resto % 60;

echo "$horas hora(s), $minutos minuto(s) e $segundos_finais segundo(s)";
?>
    </main>
</body>


<br><br>
<a href="../../index.php">
    <button>⬅ Voltar para a página inicial</button>
</a>

</html>