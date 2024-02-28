<html>
<body>
    <?php
        $n=rand(1, 100);
        $conjunto1=array();
        $conjunto2=array();
        for($i=0; $i<$n; $i++)
        {
            $conjunto1[$i]=rand(1,1000);
            $conjunto2[$i]=rand(1,1000);
        }
        for($i=0; $i<$n; $i++)
        {
            $conjunto1[$i]=rand(1,1000);
            $conjunto2[$i]=rand(1,1000);
        }
    ?>
    <h1>Valor de N: <?php echo $n ?></h1>
    
    <table border="1" cellspading="0" cellspacing="2" class="tabla">
        <tr class="A1">
            <td>Arreglo 1:</td>

                <?php
                    for($i=0; $i<$n; $i++)
                    {
                        echo "<td>", $conjunto1[$i], "</td>";
                    }
                ?>  
        </tr>
        <tr class="A2">
            <td>Arreglo 2:</td> 
                <?php
                    for($i=0; $i<$n; $i++)
                    {
                        echo "<td>", $conjunto2[$i], "</td>";
                    }
                ?>  
        </tr>
        <tr class="R">
            <td>Resultado:</td> 
                <?php
                    for($i=0; $i<$n; $i++)
                    {
                        echo "<td>", $conjunto2[$i]+$conjunto2[$i], "</td>";
                    }
                ?>  
            </h3>
        </tr>
    </table>
</body>
</html>