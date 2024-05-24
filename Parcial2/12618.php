<html>
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
    <h1>12618. Practicando formulas</h1>
    <h2>Descripcion</h2>
    <h4>Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z.</h4>
    <h3>X = 3a + 15<br>y = x + 3 / x + 1<br>z = 5x + 7y / axy</h3>
    <h2>Entrada</h2>
    <h4>Un real a. Puedes suponer que 1 < a < 100.</h4>
    <h2>Salida</h2>
    <h4>Un real que sea el valor de z impreso con tres puntos decimales.</h4>
    <h2>Ejemplo</h2>
    <?php
        $a = 33.562;
        $x = 3 * $a + 15;
        $y = ($x + 3) / ($x + 1);
        $z = ((5 * $x) + (7 * $y)) / ($a * $x * $y);
    ?>
    <table border="1" cellspacing="3" cellspadding="3" class="12618">
        <tr>
            <td>Entrada</td>
            <td>Salida</td>
        </tr>
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $z; ?></td>
        </tr>
    </table>
    <?php
        $a = 72.569;
        $x = 3 * $a + 15;
        $y = ($x + 3) / ($x + 1);
        $z = ((5 * $x) + (7 * $y)) / ($a * $x * $y);
    ?>
    <table border="1" cellspacing="3" cellspadding="3" class="12618">
        <tr>
            <td>Entrada</td>
            <td>Salida</td>
        </tr>
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $z; ?></td>
        </tr>
    </table>
    <?php
        $a = 64.835;
        $x = 3 * $a + 15;
        $y = ($x + 3) / ($x + 1);
        $z = ((5 * $x) + (7 * $y)) / ($a * $x * $y);
    ?>
    <table border="1" cellspacing="3" cellspadding="3" class="12618">
        <tr>
            <td>Entrada</td>
            <td>Salida</td>
        </tr>
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $z; ?></td>
        </tr>
    </table>
</body>
</html>