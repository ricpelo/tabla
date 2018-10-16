<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <?php
        $numero = 8;

        echo '<table border="1">';
        echo "<thead>";
        echo "<th>$numero</th><th>x</th><th>n</th><th> = </th><th>m</th>";
        echo "</thead>";
        echo "<tbody>";

        for ($i = 0; $i <= 10; $i++) {
            $res = $numero * $i;
            echo "<tr><td>$numero</td><td>x</td><td>$i</td><td> = </td><td>$res</td></tr>";
        }

        echo "</tbody>";
        echo "</table>";
        ?>
    </body>
</html>
