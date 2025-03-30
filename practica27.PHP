<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 27</title>
</head>
<body>
    <header>
        <h1>Ecuación de Primer Grado</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="a">Ingresa el valor de a:</label>
                <input type="number" name="a" id="a" required><br><br>

                <label for="b">Ingresa el valor de b:</label>
                <input type="number" name="b" id="b" required><br><br>

                <button type="submit">Enviar</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $a = floatval($_POST['a']);
                $b = floatval($_POST['b']);

                if ($a == 0) {
                    $mensaje = "<br>Error: El valor de 'a' no puede ser 0.";
                } else {
                    $x = -$b / $a;
                    $mensaje = "<br>El valor de x es: " . $x;
                }

                echo $mensaje;
            }
            ?>

            <br><br>
            <a href="PRACTICA28.php">Siguiente práctica</a>
        </section>
    </main>
    <footer>
        <p>Prácticas PHP</p>
    </footer>
</body>
</html>
