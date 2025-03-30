<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 25</title>
</head>
<body>
    <header>
        <h1>Doble y triple</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingresa un número:</label><br>
                <input type="number" id="num" name="num" required><br><br>
                <button type="submit">Enviar</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numero = intval($_POST['num']);

                if ($numero % 2 == 0) {
                    $mensaje = "<br>El doble del número " . $numero . " es: " . ($numero * 2);
                } else {
                    $mensaje = "<br>El triple del número " . $numero . " es: " . ($numero * 3);
                }

                echo $mensaje;
            }
            ?>

            <br><br>
            <a href="practica26.php">Siguiente práctica</a>
        </section>
    </main>
    <footer>
        <p>practicas</p>
    </footer>
</body>
</html>