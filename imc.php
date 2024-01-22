<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form action="">
        <label for="peso">Informe seu peso:</label><br>
        <input type="text" name="peso">
        <br><br>
        <label for="altura">Informe sua altura:</label><br>
        <input type="text" name="altura">
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];
        $imc = $peso / ($altura * $altura);

        echo "<p>Seu IMC é " . $imc . "</p>";

        if ($imc < 18.5)
        {
            echo "<p>Você está abaixo do peso.</p>";
        }
        else if ($imc < 24.5)
        {
            echo "<p>Seu peso é normal.</p>";
        }
        else
        {
            echo "<p>Você está acima do peso.</p>";
        }
    ?>
</body>
</html>