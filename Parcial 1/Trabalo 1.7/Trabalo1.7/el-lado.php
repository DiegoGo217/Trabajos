<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>el-lado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
        <h1>Calculos condicionales</h1>
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
            <h3>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.</h3>
            <h1>Entrada</h1>
            <h3>Ocho reales x1, y1, x2, y2, x3, y3, x4, y4. Puedes suponer que 0 <= xi yi <= 100 y que los vértices se listan ordenados en el sentido de las manecillas del reloj.</h3>
            <h1>Salida</h1>
            <h3>Un real que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.</h3>
            <h1>Ejemplo</h1>
        </section>
        <section class="cod-php">
            <form action="el-lado.php" method="post">
                <table border="1">
                    <tr>
                        <td>x1: </td>
                        <td><input type="text" name="txtx1"></td>
                    </tr>
                    <tr>
                        <td>y1: </td>
                        <td><input type="text" name="txty1"></td>
                    </tr>
                    <tr>
                        <td>x2: </td>
                        <td><input type="text" name="txtx2"></td>
                    </tr>
                    <tr>
                        <td>y2: </td>
                        <td><input type="text" name="txty2"></td>
                    </tr>
                    <tr>
                        <td>x3: </td>
                        <td><input type="text" name="txtx3"></td>
                    </tr>
                    <tr>
                        <td>y3: </td>
                        <td><input type="text" name="txty3"></td>
                    </tr>
                    <tr>
                        <td>x4: </td>
                        <td><input type="text" name="txtx4"></td>
                    </tr>
                    <tr>
                        <td>y4: </td>
                        <td><input type="text" name="txty4"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Enviar"></td>
                    </tr>
                </table>
            </form>
            <table border="1">
                <tr>
                    <td>Entrada</td>
                    <td>Salida</td>
                </tr>
                <tr>
                    <?php
                        if($_POST)
                        {
                            $x1=$_POST['txtx1'];
                            $y1=$_POST['txty1'];
                            $x2=$_POST['txtx2'];
                            $y2=$_POST['txty2'];
                            $x3=$_POST['txtx3'];
                            $y3=$_POST['txty3'];
                            $x4=$_POST['txtx4'];
                            $y4=$_POST['txty4'];
                            $lados=array();
                            $lados[0] = sqrt(pow(($y2 - $y1), 2) + pow(($x2 - $x1), 2));
                            $lados[1] = sqrt(pow(($y3 - $y2), 2) + pow(($x3 - $x2), 2));
                            $lados[2] = sqrt(pow(($y4 - $y3), 2) + pow(($x4 - $x3), 2));
                            $lados[3] = sqrt(pow(($y1 - $y4), 2) + pow(($x1 - $x4), 2));
                            $ladomenor=0;
                            $ladomenor=min($lados);
                            echo "<td>", $x1, " ", $y1, "<br>", $x2, " ", $y2, "<br>", $x3, " ", $y3, "<br>", $x4, " ", $y4, "</td>";
                            echo "<td>", $ladomenor, "</td>";
                        }
                    ?>
                </tr>
            </table>
        </section>
</body>
</html>