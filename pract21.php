<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de Tres Números</title>
</head>
<body>
    <header>
        <h1>Determinar el Mayor de Tres Números</h1>
    </header>
    <main>
        <form action="" method="post">
            <label for="num1">Ingresa el número 1:</label>
            <input type="number" name="num1" id="num1" required><br><br>
            
            <label for="num2">Ingresa el número 2:</label>
            <input type="number" name="num2" id="num2" required><br><br>
            
            <label for="num3">Ingresa el número 3:</label>
            <input type="number" name="num3" id="num3" required><br><br>
            
            <button type="submit">Enviar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $n3 = $_POST['num3'];

            if ($n1 >= $n2 && $n1 >= $n3) {
                $mayor = $n1;
            } elseif ($n2 >= $n1 && $n2 >= $n3) {
                $mayor = $n2;
            } else {
                $mayor = $n3;
            }

            echo "<br>El número mayor es:$mayor</br>";
        }
        ?>
        <a href="pract22.php">siguiente practica</a>
    </main>
    <footer>
        <p>PRACTICAS PHP</p>
    </footer>
</body>
</html>
