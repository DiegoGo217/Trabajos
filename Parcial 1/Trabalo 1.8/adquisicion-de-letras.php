<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autores</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
        <h1>adquisicion-de-letras</h1>
        </header>
        <div class="container-navbar">
            <nav class="navbar container">
                <li class="fa-solid fa-bars"></li>
                <ul class="menu">
                    <li><a href="portada.php">portada</a></li>
                    <li><a href="bit-de-paridad.php">Bit-de-paridad</a></li>
                    <li><a href="autores.php">Autores</a></li>
                    <li><a href="adquisicion-de-letras.php">Adquisicion-de-letras</a></li>
                </ul>
            </nav>
        </div>
        <section class="exp-prob">
            <h1>Descripcion</h1>
            <h3>En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.
                <br>El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.</h3>
            <h1>Entrada</h1>
            <h3>Un solo string de letras minúsculas.</h3>
            <h1>Salida</h1>
            <h3>La cantidad de veces que aparece la letra favorita de Miguel.</h3>
            <h1>Ejemplo</h1>
        </section>
        <section class="cod-php">
            <form action="adquisicion-de-letras.php" method="post">
                <table border="1">
                    <tr>
                        <td>Autor: </td>
                        <td><input type="text" name="txtcadena"></td>
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
                            $cadena=$_POST['txtcadena'];
                            $n=strlen($cadena);
                            $cont=0;
                            echo "<td>", $cadena ,"</td>";
                            for($i=0; $i<$n; $i++)
                            {
                                if($cadena[$i]=="d")
                                {
                                    $cont++;
                                }
                            }
                            echo "<td>", $cont ,"</td>";
                        }
                    ?>
                </tr>
            </table>
        </section>
</body>
</html>