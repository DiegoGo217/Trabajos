<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>escalera</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <header>
            <h1>11338. Escalera de asteriscos</h1>
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
            <h3>Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura N hecha de asteriscos.</h3>
            <h1>Entrada</h1>
            <h3>Se te darán como valor de entrada un numero entero N el cuál representa la longitud y altura de la escalera.</h3>
            <h1>Salida</h1>
            <h3>Deberás imprimir como salida una escalera de dimensiones N de largo y N de alto</h3>
            <h1>Ejemplo</h1>
        </section>
        <section class="cod-php">
            <form action="escalera.php" method="post">
                <table border="1">
                    <tr>
                        <td>N: </td>
                        <td><input type="text" name="txtN"></td>
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
                            $n=$_POST['txtN'];
                            echo "<td>", $n ,"</td>";
                            echo "<td>";
                            for($i=0; $i<$n; $i++)
                            {
                                for($k=0; $k<=$i; $k++)
                                {
                                    echo "#";
                                }
                                echo "<br>";
                            }
                            echo "</td>";
                        }
                    ?>
                </tr>
            </table>
        </section>
    </body>
</html>