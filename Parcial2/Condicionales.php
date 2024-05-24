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
    <h1>Estaciones del año</h1>
    <h2>Descripcion</h2>
    <p>
        Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, 
        como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación 
        (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día d
        y un mes m
        según lo siguiente:
    </p>
    <h4>
        Winter del 21 de diciembre al 20 de marzo <br>
        Spring del 21 de marzo al 21 de junio <br>
        Summer del 22 de junio al 22 de septiembre <br>
        Fall del 23 de septiembre al 20 de diciembre
    </h4>
    <p>
        Considerando la siguiente cantidad de días para cada mes:
    </p>
    <h4> 
        Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días <br>
        Abril, Junio, Septiembre y Noviembre 30 días <br>
        Febrero 28 días <br>
        Cualquier fecha fuera de estos rangos debe considerarse como no existente
    </h4>
    <h3>Entrada</h3>
    <p>
        Dos números enteros d y m separados por un espacio que corresponden al día y mes de una fecha determinada
    </p>
    <h3>Salida</h3>
    <p>
        Una cadena S que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida
    </p>
    <table border="1" cellspacing="0" cellspadding="2" class=Estaciones_del_año>
        <?php
            $D=15;
            $M=10;
            $S="";
            if($M==1)
            {
                $S="Winter";
            }
            if($M==2)
            {
                $S="Winter";
            }
            if($M==3)
            {
                if($D<=20 && $D>0)
                {
                    $S="Winter";
                }
                else if($D>=21 && $D<=31)
                {
                    $S="Spring";
                }
            }
            if($M==4)
            {
                $S="Spring";
            }
            if($M==5)
            {
                $S="Spring";
            }
            if($M==6)
            {
                if($D<=21)
                {
                    $S="Spring";
                }
                else if($D>21 && $D<=30)
                {
                    $S="Summer";
                }
            }
            if($M==7)
            {
                $S="Summer";
            }
            if($M==8)
            {
                $S="Summer";
            }
            if($M==9)
            {
                if($D<=22)
                {
                    $S="Summer";
                }
                else if($D>22 && $D<=30)
                {
                    $S="Fall";
                }
            }
            if($M==10)
            {
                $S="Fall";
            }
            if($M==11)
            {
                $S="Fall";
            }
            if($M==12)
            {
                if($D<=20)
                {
                    $S="Fall";
                }
                if($D>20 && $D<=31)
                {
                    $S="Winter";
                }
            }
        ?>
        <tr>
            <td>Entrada</td>
            <td>Salida</td>            
        </tr>
        <tr>

            <td><?php echo $D, " ", $M ?></td>
            <td><?php echo $S ?></td>
        </tr>
    </table>
    <h4>_______________________________________________________________________________</h4>
    <h1>Cuantos valen 7</h1>
    <h2>Descripcion</h2>
    <h4>Declarar dos enteros en el rango de -1000 a +1000 y determinar cuantos de ellos valen 7</h4>
    <h2>Entrada</h2>
    <h4>Dos numeros enteros en el rango de -1000 a +1000</h4>
    <h2>Salida</h2>
    <h4>Numero de enteros iguales a 7</h4>
    <table border="1" cellspacing="0" cellspadding="2" class="Estaciones_del_año">
        <?php
            $a=7;
            $b=57;
            $cont=0;
            if($a==7 && $b==7)
            {
                $cont=$cont+2;
            }
            else if($a==7 || $b==7)
            {
                $cont++;
            }
        ?>
        <tr>
            <td>Entrada</td>
            <td>Salida</td>
        </tr>
        <tr>
            <td><?php echo $a, " ", $b ?></td>
            <td><?php echo $cont ?></td>
        </tr>
    </table>
</body>
</html>