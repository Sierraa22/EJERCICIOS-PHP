<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <header>
        <mark><h1>Orden Ascendente</h1></mark>
    </header>
    
    <main>
        <section>
            <form action="" method="post">
                <label for="num1">Ingresa un número:</label>
                <input type="number" name="num1" id="num1" required><br><br>
                
                <label for="num2">Ingresa un número:</label>
                <input type="number" name="num2" id="num2" required><br><br>

                <label for="num3">Ingresa un número:</label>
                <input type="number" name="num3" id="num3" required><br><br>
                <button type="submit">Enviar</button>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $N1 = $_POST['num1'];
                $N2 = $_POST['num2'];
                $N3 = $_POST['num3'];

                if ($N1 < $N2 && $N1 < $N3) {
                    $menor = $N1;
                } elseif ($N2 < $N1 && $N2 < $N3) {
                    $menor = $N2;
                } else {
                    $menor = $N3;
                }

                if ($N1 > $N2 && $N1 > $N3) {
                    $mayor = $N1;
                } elseif ($N2 > $N1 && $N2 > $N3) {
                    $mayor = $N2;
                } else {
                    $mayor = $N3;
                }

                $intermedio = ($N1 + $N2 + $N3) - ($mayor + $menor);

                echo "Orden Ascendente: $menor, $intermedio, $mayor";
            }
            ?>
            <br><br>
            <a href="practica27.PHP">Siguiente práctica</a>
        </section>
    </main> 
    </center>
    <footer>
        <p>PRACTICAS PHP</p>
    </footer>
</body>
</html>

