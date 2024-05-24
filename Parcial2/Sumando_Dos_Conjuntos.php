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