<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <form action="" method="get">
            <label for="num">Número:</label>
            <input id="num" type="text" name="num">
            <input type="submit" value="Calcular">
        </form>
        <?php
        require './auxiliar.php';

        if (isset($_GET['num'])) {
            $numero = $_GET['num'];
            if (!ctype_digit($numero)) {
                mostrarError("se ha pasado algo que no es un número.");
            } else {
                if ($numero < 0 || $numero > 10) {
                    mostrarError("el número debe estar comprendido entre 0 y 10.");
                } else {
                    mostrarTabla($numero);
                }
            }
        }
        ?>
    </body>
</html>
