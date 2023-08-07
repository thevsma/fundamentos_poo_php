<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Calculadora</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Calculadora</h1>

        <form action="calc1.php" method="get">
            <fieldset>
                <legend>Calculadora</legend>

                <label for="num1">Número 1</label>
                <input type="number" name="num1" id="num1">
                <br>

                <label for="num2">Número 2</label>
                <input type="number" name="num2" id="num2">
                <br>

                <input type="submit" value="Calcular">
            </fieldset>
        </form>
    </main>
</body>

</html>