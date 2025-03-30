<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 29</title>
</head>

<body>
    <header>
        <h1>DOBLE Y TRIPLE</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingresa un numero</label><br><br>
                <input type="number" name="num" id="num"><br><br>
                <button type="submit">Enviar</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numero = $_POST['num'];
                if ($numero > 0) {
                    $resultado = $numero * 2;
                } else if ($numero < 0) {
                    $resultado = $numero * 3;
                } else {
                    $resultado = 0;
                }
                echo "<br><br>El resultado es: $resultado";
            }
            ?>

            <br><br>
            <a href="Practica.php">Siguiente Practica</a>
        </section>
    </main>
    <footer>
        <p>PRACTICAS</p>
    </footer>
</body>
</html>
