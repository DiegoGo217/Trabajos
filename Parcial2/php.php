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