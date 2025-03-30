<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es Vocal o No</title>
</head>
<body>
    <header>
        <h1>ES VOCAL O NO ES VOCAL</h1>
    </header>
    <main>
        <form action="" method="post">
            <label for="caracter">Ingresa un caracter:</label>
            <input type="text" name="caracter" id="caracter" maxlength="1">
            <button type="submit">Enviar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['caracter']) && !empty(trim($_POST['caracter']))) {
                $char = trim($_POST['caracter']);

                if ($char == 'a' || $char == 'A') {
                    $resultado = "es vocal";
                } elseif ($char == 'e' || $char == 'E') {
                    $resultado = "es vocal";
                } elseif ($char == 'i' || $char == 'I') {
                    $resultado = "es vocal";
                } elseif ($char == 'o' || $char == 'O') {
                    $resultado = "es vocal";
                } elseif ($char == 'u' || $char == 'U') {
                    $resultado = "es vocal";
                } else {
                    $resultado = "no es vocal";
                }

                echo "<p>El carácter ingresado '$char' $resultado.</p>";
            } else {
                echo "<p>Por favor, ingresa un carácter válido.</p>";
            }
        }
        ?>

        <a href="pract23.php">Siguiente práctica</a>
    </main>
    <footer>
        <p>Prácticas PHP</p>
    </footer>
</body>
</html>