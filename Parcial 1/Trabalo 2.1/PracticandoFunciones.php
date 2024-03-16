<?php
    if($_POST)
    {
        $x1=$_POST['txtX'];
        $y1=$_POST['txtY'];
        $z1=$_POST['txtZ'];
        function g($b, $c)
        {
            $resg = (7*$b-3)%($c*$c+1);
            return $resg;
        }
        function f($a)
        {
            $resf = pow(4*$a, 3)+ g(2*$a, -3*$a);
            return $resf;
        }
        function h($x, $y, $z)
        {
            $resh = f($x/$y) + 3 * g($z/$y, $x);
            return $resh;
        }
        echo $x1;
        echo "<table border =", "1", ">", "<tr>";
            echo "<td>Resultado:</td>";
            echo "<td>", h($x1, $y1, $z1), "</td>";
        echo "</tr></table>";
    }
?>