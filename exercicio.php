<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificar Idade</title>
</head>
<body>

    <h2>Verificar Idade</h2>

    <label for="idade">Digite sua idade:</label>
    <input type="number" id="idade">
    <button onclick="verificarIdade()">Verificar</button>

    <p id="resultado"></p>

    <script>
        function verificarIdade() {
            let idade = parseInt(document.getElementById("idade").value);
            let resultado = document.getElementById("resultado");

            if (idade > 18) {
                resultado.innerHTML = "Maior de 18 anos";
            } else if (idade < 18) {
                resultado.innerHTML = "Menor de 18 anos";
            } else if (idade === 18) {
                resultado.innerHTML = "Tem 18 anos";
            } else {
                resultado.innerHTML = "Digite uma idade válida.";
            }
        }
    </script>

</body>
</html>