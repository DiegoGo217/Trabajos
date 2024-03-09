<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>calculos</title>
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
            <h3>
                Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N, realizar las siguientes operaciones en el orden indicado y con aritmética entera: <br>
                1. Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1. <br>
                2. Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10. <br>
                3. Si el valor actual de N es un múltiplo de tres, réstale uno. <br>
                Escribe un programa que te ayude a calcular el valor final de y el número de veces que N fue modificado.
            </h3>
            <h1>Entrada</h1>
            <h3>Un entero N. Puedes suponer que 1 <= N <= 1000 .</h3>
            <h1>Salida</h1>
            <h3>Dos enteros que correspondan con el valor final de N y el número de veces que N fue modificado respectivamente.</h3>
            <h1>Ejemplo</h1>
        </section>
        <section class="cod-php">
            <form action="calculos-condicionales.php" method="post">
                <table border="1" cellspading="2" cellspacing="2">
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
        <?php
            if($_POST)
            {
                $cont=0;
                $n=$_POST['txtN'];
                $vN=$n;
                if($n%2==0)
                {
                    $n=$n/2;
                    $cont++;
                }
                else
                {
                    $n=$n+1;
                    $cont++;
                }
                if($n>=100)
                {
                    $n=$n/100;
                    $cont++;
                }
                else if($n>=10 && $n<=99)
                {
                    $n=$n/10;
                    $cont++;
                }
                if($n%3==0)
                {
                    $n=$n-1;
                    $cont++;
                }
            }
        ?>
        <table border="1">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <?php
                    echo "<td>", $vN, "</td>";
                    echo "<td>", $n, " ", $cont, "<td>";
                ?>
            </tr>
        </table>
    </section>
</body>
</html>
