<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Fundamentos de POO em PHP</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Fundamentos de POO em PHP</h1>

        <?php
            require_once 'classes/tarefa.class.php';
            require_once 'classes/soma.class.php';

            $t1 = new Tarefa();
            $t1 -> desc = "Não é possível";
            $t1 -> conc = true;
            $t1 -> dateTime = "2023-08-07 08:31:00";

            echo "<p>$t1</p>";

            $s1 = new Soma();
            $s1 -> num1 = 100;
            $s1 -> num2 = 1000;
            echo "<p>$s1</p>";
        ?>
    </main>

    <footer>
        <p>&copy;2023 - Matheus Vieira</p>
    </footer>
</body>

</html>