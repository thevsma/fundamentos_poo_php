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

            $s = new Calc();
            $s -> num1 = $_GET["num1"];
            $s -> num2 = $_GET["num2"];

            echo "<p>{$s -> num1} + {$s -> num2} = {$s -> soma()}</p>";
        ?>
    </main>
</body>

</html>