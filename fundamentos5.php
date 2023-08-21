<!DOCTYPE html>
<html lang="en">

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

        <?php
            require_once 'classes/util/calc.class.php';
            use br\edu\ifnmg\web\util\Calc;

            $aux = Calc::Mult(10, 2);
            echo "<p>$aux</p>";
        ?>
    </main>

    <footer>
        <p>&copy;2023 - Matheus Vieira</p>
    </footer>
</body>

</html>