<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>adquisicion-de-letras</h1>
        </header>
        <nav>
        <ul class="menu-horizontal">
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="#">Parcial I</a>
                <ul class="menu-vertical">
                    <li><a href="12618.php">12610</a></li>
                    <li><a href="Sumando_dos_conjuntos">Sumando dos conjuntos</a></li>
                    <li><a href="Condicionales.php">Condicionales</a></li>
                    <li><a href="php.php">PHP</a></li>
                    <li><a href="adquisicion-de-letras.php">Adquisicion de letras</a></li>
                    <li><a href="bit-de-paridad.php">Bit de paridad</a></li>
                    <li><a href="autores.php">Autores</a></li>
                    <li><a href="calculos-condicionales.php">Calculos Condicionales</a></li>
                    <li><a href="el-lado.php">Dado</a></li>
                    <li><a href="formulota.php">Formulota</a></li>
                    <li><a href="escalera.php">Escalera</a></li>
                </ul>
            </li>
            <li><a href="#">Parcial II</a>
                <ul class="menu-vertical">
                    <li><a href="PracticandoFunciones.php">Practicando Funciones</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </li>
        </ul>
    </nav>
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