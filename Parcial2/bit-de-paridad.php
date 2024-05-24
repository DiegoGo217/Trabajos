<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bit-de-paridad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>bit-de-paridad</h1>
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
            <h3>Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método:<br>
                    - Bit de paridad par<br>
                    - Bit de paridad impar.<br>
                En el caso de la paridad par, se cuentan el número de unos. 
                Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. 
                Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.
                Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.</h3>
            <h1>Entrada</h1>
            <h3>La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.</h3>
            <h1>Salida</h1>
            <h3>La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.</h3>
            <h1>Ejemplo</h1>
        </section>
        <section class="cod-php">
            <form action="bit-de-paridad.php" method="post">
                <table border="1">
                    <tr>
                        <td>Bits: </td>
                        <td><input type="text" name="txtbits"></td>
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
                            $bits=$_POST['txtbits'];
                            $n=strlen($bits);
                            $cont0=0;
                            $cont1=0;
                            echo "<td>", $bits, "</td>";
                            for($i=0; $i<$n; $i++)
                            {
                                if($bits[$i]==0)
                                {
                                    $cont0++;
                                }
                                else if($bits[$i]==1)
                                {
                                    $cont1++;
                                }
                            }
                            if($cont1%2==0 || $cont1==0)
                            {
                                echo "<td>",$bits, "0", "</td>";
                            }
                            else if($cont1%2!=0)
                            {
                                echo "<td>", $bits, "1", "</td>";
                            }
                        }
                    ?>
                </tr>
            </table>
        </section>
</body>
</html>