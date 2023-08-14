<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Restaurante</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Restaurante</h1>

        <?php
            require_once 'classes/prato.class.php';
            require_once 'classes/ingrediente.class.php';

            $yakisoba = new Prato();

            $carne = new Ingrediente();
            $carne -> nome = "Carne";
            $carne -> valor = 17;
            $yakisoba -> addIngrediente($carne);

            $cenoura = new Ingrediente();
            $cenoura -> nome = "Cenoura";
            $cenoura -> valor = 5;
            $yakisoba -> addIngrediente($cenoura);

            $macarrao = new Ingrediente();
            $macarrao -> nome = "Macarrão";
            $macarrao -> valor = 7;
            $yakisoba -> addIngrediente($macarrao);

            $broloquis = new Ingrediente();
            $broloquis -> nome = "Brócolis";    
            $broloquis -> valor = 5;
            $yakisoba -> addIngrediente($broloquis);

            echo "<p>Custo Yakisoba: {$yakisoba -> calcCusto()}</p>";
        ?>
    </main>

    <footer>
        <p>&copy;2023 - Matheus Vieira</p>
    </footer>
</body>

</html>