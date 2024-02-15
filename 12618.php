<html>
<body>
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
        $y = $x + 3 / $x + 1;
        $z = 5 * $x + 7 * $y / $a * $x * $y;
    ?>
</body>
</html>