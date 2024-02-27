<?php
    $cal=array();
    $n=rand(1, 1000);
    $prom=0;
    $contA=0;
    $contR=0;
    $contAMP=0;
    for($i=0; $i<$n; $i++)
    {
        array_push($cal, rand(0, 10));
    }
    for($i=0; $i<$n; $i++)
    {
        $prom=$prom+$cal[$i];
        if($cal[$i]>=6)
        {
            $contA++;
        }
        else
        {
            $contR++;
        }
    }
    $prom=$prom/$n;
    for($i=0; $i<$n; $i++)
    {
        if($cal[$i]>=$prom)
        {
            $contAMP++;
        }
    }
?>
<html>
<body>
    <h2><?php echo "<br> Promedio: ", round($prom, 2) ; ?></h2>
    <table border="1">
        <?php
            $cont=0;
            for($i=0; $i<$n/30; $i++)
            {
                echo "<tr>";
                for($k=0; $k<30; $k++)
                {
                    if($cont+$k<$n)
                    {
                        echo "<td>", $cal[$k+$cont], "</td>";
                    }  
                }
                $cont=$cont+30;
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>