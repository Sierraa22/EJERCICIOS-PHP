<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Múltiplos</title>
</head>
<body>
    <center>
        <header>
            <h1><mark>MÚLTIPLO DE 3 Y 5</mark></h1>
        </header>
    </center>
    <main>
        <center>
        <section>
            <form action="" method="POST">
                <label for="numero">Ingresa un número:</label>
                <input type="number" id="numero" name="numero" required>
                <br><br>
                <button type="submit">Enviar</button>
            </form>
         </center>
         <center>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = intval($_POST['numero']);

                if ($numero % 3 == 0 && $numero % 5 == 0) {
                    $mensaje = "El número " . $numero . " es múltiplo de 3 y 5.";
                } else {
                    $mensaje = "El número " . $numero . " no es múltiplo de 3 y 5.";
                }
                echo "<p>$mensaje</p>";
            }
            ?>
           
            <br>
            <a href="pract24.php">Siguiente práctica</a>
        </section>
    </main>
    </center>
    <footer>
        <p>parctica</p>
    </footer>

</body>
</html>

