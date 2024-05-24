<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
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
    <section>
        <table border="1">
            <form action="PracticandoFunciones.php" method="post">
                <tr>
                    <td>X:</td>
                    <td><input type="text" name="txtX"></td>
                </tr>
                <tr>
                    <td>Y:</td>
                    <td><input type="text" name="txtY"></td>
                </tr>
                <tr>
                    <td>Z:</td>
                    <td><input type="text" name="txtZ"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Enviar"></td>
                </tr>
            </form>
        </table>
    </section>
</body>
</html>
<?php
    if($_POST)
    {
        $x1=$_POST["txtX"];
        $y1=$_POST["txtY"];
        $z1=$_POST["txtZ"];
        function g($b, $c)
        {
            $resg = (7*$b-3)%($c*$c+1);
            return $resg;
        }
        function f($a)
        {
            $resf = pow(4*$a, 3) + g(2*$a, -3*$a);
            return $resf;
        }
        function h($x, $y, $z)
        {
            $resh = f($x/$y) + 3 * g($z/$y, $x);
            return $resh;
        }
        $res=h($x1,$y1,$z1);
        echo $res;
    }
?>