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
        <h1>Autores</h1>
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
            <h3>Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas</h3>
            <h1>Entrada</h1>
            <h3>La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). El primer carácter siempre será una letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula. Todos los demás caracteres serán letras minúsculas.</h3>
            <h1>Salida</h1>
            <h3>La primera y única línea de salida debe contener la variación corta apropiada.</h3>
            <h1>Ejemplo</h1>
        </section>
        <section class="cod-php">
            <form action="autores.php" method="post">
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
                            $autor="";
                            $cont=0;
                            echo "<td>", $cadena ,"</td>";
                            for($i=0; $i<$n; $i++)
                            {
                                if($cadena[$i]=="A")
                                {
                                    $autor[$cont]="A";
                                    $cont++;
                                }
                                else if($cadena[$i]=="B")
                                {
                                    $autor[$cont]="B";
                                    $cont++;
                                }
                                else if($cadena[$i]=="C")
                                {
                                    $autor[$cont]="C";
                                    $cont++;
                                }
                                else if($cadena[$i]=="D")
                                {
                                    $autor[$cont]="D";
                                    $cont++;
                                }
                                else if($cadena[$i]=="E")
                                {
                                    $autor[$cont]="E";
                                    $cont++;
                                }
                                else if($cadena[$i]=="F")
                                {
                                    $autor[$cont]="F";
                                    $cont++;
                                }
                                else if($cadena[$i]=="G")
                                {
                                    $autor[$cont]="G";
                                    $cont++;
                                }
                                else if($cadena[$i]=="H")
                                {
                                    $autor[$cont]="H";
                                    $cont++;
                                }
                                else if($cadena[$i]=="I")
                                {
                                    $autor[$cont]="I";
                                    $cont++;
                                }
                                else if($cadena[$i]=="J")
                                {
                                    $autor[$cont]="J";
                                    $cont++;
                                }
                                else if($cadena[$i]=="K")
                                {
                                    $autor[$cont]="K";
                                    $cont++;
                                }
                                else if($cadena[$i]=="L")
                                {
                                    $autor[$cont]="L";
                                    $cont++;
                                }
                                else if($cadena[$i]=="M")
                                {
                                    $autor[$cont]="M";
                                    $cont++;
                                }
                                else if($cadena[$i]=="N")
                                {
                                    $autor[$cont]="N";
                                    $cont++;
                                }
                                else if($cadena[$i]=="O")
                                {
                                    $autor[$cont]="O";
                                    $cont++;
                                }
                                else if($cadena[$i]=="P")
                                {
                                    $autor[$cont]="P";
                                    $cont++;
                                }
                                else if($cadena[$i]=="Q")
                                {
                                    $autor[$cont]="Q";
                                    $cont++;
                                }
                                else if($cadena[$i]=="R")
                                {
                                    $autor[$cont]="R";
                                    $cont++;
                                }
                                else if($cadena[$i]=="S")
                                {
                                    $autor[$cont]="S";
                                    $cont++;
                                }
                                else if($cadena[$i]=="T")
                                {
                                    $autor[$cont]="T";
                                    $cont++;
                                }
                                else if($cadena[$i]=="U")
                                {
                                    $autor[$cont]="U";
                                    $cont++;
                                }
                                else if($cadena[$i]=="V")
                                {
                                    $autor[$cont]="V";
                                    $cont++;
                                }
                                else if($cadena[$i]=="W")
                                {
                                    $autor[$cont]="W";
                                    $cont++;
                                }
                                else if($cadena[$i]=="X")
                                {
                                    $autor[$cont]="X";
                                    $cont++;
                                }
                                else if($cadena[$i]=="Y")
                                {
                                    $autor[$cont]="Y";
                                    $cont++;
                                }
                                else if($cadena[$i]=="Z")
                                {
                                    $autor[$cont]="Z";
                                    $cont++;
                                }
                            }
                        }
                        echo "<td>", $autor ,"</td>";
                    ?>
                </tr>
            </table>
        </section>
</body>
</html>