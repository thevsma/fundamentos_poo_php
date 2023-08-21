<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Testes</title>
</head>
<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Testes</h1>

        <?php
            require_once 'classes/autoloader.class.php';

            $calc = new br\edu\ifnmg\web\calc();
        ?>
    </main>

    <footer>
        <p>&copy;2023 - Matheus Vieira</p>
    </footer>
</body>
</html>