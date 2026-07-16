<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Positivo, Negativo ou Zero</title>
</head>

<body>

<form method="post">
    Digite um número:
    <input type="number" name="numero">
    <input type="submit" value="enviar">
</form>

<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    if ($numero > 0) {
        echo "<p>O número é positivo.</p>";
    } elseif ($numero < 0) {
        echo "<p>O número é negativo.</p>";
    } else {
        echo "<p>O número é zero.</p>";
    }
    
}
?>

</body>
</html>
