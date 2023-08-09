<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Pessoa/Telefone</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Pessoa/Telefone</h1>

        <?php
            require_once 'classes/pessoa.class.php';
            require_once 'classes/telefone.class.php';

            $p = new Pessoa();
            $t = new Telefone();

            $p -> tel = $t;
            $p -> name = "Matheus";
            $p -> cpf = 72928338624;

            $t -> ddd = 38;
            $t -> num = 998095679;

            echo "<p>$p</p>";
            echo "<p>$t</p>";
        ?>
    </main>

    <footer>
        <p>&copy;2023 - Matheus Vieira</p>
    </footer>
</body>

</html>