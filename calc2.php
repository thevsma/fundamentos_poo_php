<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Resultado</h1>

        <?php
            require_once 'classes/calc.class.php';

            if (isset($_GET["num1"]) && isset($_GET["num2"])) {
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
            }

            if (isset($_GET["sum"])) {
                $x = new Calc();
                $x -> num1 = $num1;
                $x -> num2 = $num2;
                echo "<p>{$x -> num1} + {$x -> num2} = {$x -> soma()}</p>";
            }

            if (isset($_GET["sub"])) {
                $x = new Calc();
                $x -> num1 = $num1;
                $x -> num2 = $num2;
                echo "<p>{$x -> num1} - {$x -> num2} = {$x -> sub()}</p>";
            }

            if (isset($_GET["mult"])) {
                $x = new Calc();
                $x -> num1 = $num1;
                $x -> num2 = $num2;
                echo "<p>{$x -> num1} * {$x -> num2} = {$x -> mult()}</p>";
            }

            if (isset($_GET["div"])) {
                $x = new Calc();
                $x -> num1 = $num1;
                $x -> num2 = $num2;
                echo "<p>{$x -> num1} / {$x -> num2} = {$x -> div()}</p>";
            }
        ?>

        <a href="fundamentos2.html">Voltar</a>
    </main>

    <footer>
        <p>&copy;2023 - Matheus Vieira</p>
    </footer>
</body>

</html>