<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulota</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <header>
            <h1>Formulota</h1>
        </header>
        <div class="container-navbar">
            <nav class="navbar container">
                <li class="fa-solid fa-bars"></li>
                <ul class="menu">
                    <li><a href="portada.php">portada</a></li>
                    <li><a href="calculos-condicionales.php">calculos-condicionales</a></li>
                    <li><a href="escalera.php">escalera</a></li>
                    <li><a href="formulota.php">formulota</a></li>
                    <li><a href="el-lado.php">El lado</a></li>
                </ul>
            </nav>
        </div>
        <section class="exp-prob">
            <h1>Descripcion</h1>
            <h3>Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).</h3>
            <h1>Entrada</h1>
            <h3>El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.</h3>
            <h1>Salida</h1>
            <h3>La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.<br>Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida</h3>
            <h1>Ejemplo</h1>
        </section>
        <section class="cod-php">
            <form action="formulota.php" method="post">
                <table border="1">
                    <tr>
                        <td>x: </td>
                        <td><input type="text" name="txtX"></td>
                    </tr>
                    <tr>
                        <td>y:</td>
                        <td><input type="text" name="txtY"></td>
                    </tr>
                    <tr>
                        <td>z:</td>
                        <td><input type="text" name="txtZ"></td>
                    </tr>
                    <tr>
                        <td>Enviar:</td>
                        <td><input type="submit" name="Enviar"></td>
                    </tr>
                </table>
            </form>
        <?php
            if($_POST)
            {
                $x=$_POST['txtX'];
                $y=$_POST['txtY'];
                $z=$_POST['txtZ'];
                $p1=($x+$y)/(2*$x);
                $p2=(pow($x,3)+pow($y,3))/($x*$x+$y*$y);
                $p3=($x*$x+$y*$y+$z*$z);
                $res=($p1+$p2)/$p3;
            }
        ?>
        <table border="1">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <?php
                    echo "<td>", $x, "<br>", $y, "<br>", $z, "</td>";
                    echo "<td>", round($res, 6) ,"<td>";
                ?>
            </tr>
        </table>
    </section>
</body>
</html>