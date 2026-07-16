<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Taxa de Transferência</title>
</head>
<body>

<h2>Calcular Taxa de Transferência</h2>

<form method="post">
    Ano de fabricação:
    <input type="number" name="ano" required><br><br>

    Valor do veículo:
    <input type="number" name="valor" step="0.01" required><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['ano']) && isset($_POST['valor'])) {
    $ano = $_POST['ano'];
    $valor = $_POST['valor'];

    if ($ano < 2015) {
        $taxa = $valor * 0.01;
    } else {
        $taxa = $valor * 0.015;
    }

    echo "<h3>Valor da taxa de transferência: R$ " . number_format($taxa, 2, ',', '.') . "</h3>";
}
?>

</body>
</html>