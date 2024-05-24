<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
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
    <table border="1">
        <form action="crud_alumnos.php" method="post">
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="txtUsuario"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="text" name="txtContraseña"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enviar"></td>
            </tr>
            <tr>
                <?php
                    if($_POST)
                    {
                        $conexion = mysqli_connect('localhost','root','','sistema','3306');
                        $hhm1 = $_POST["txtUsuario"];
                        $hhm2 = $_POST["txtContraseña"];
                    
                        $consulta = "select * from usuarios where login = '$hhm1' and password= sha1('$hhm2');";
                        $resultado = mysqli_query($conexion, $consulta);

                        if($mostrar = mysqli_fetch_array($resultado))
                        {
                            echo "<td> Contraseña Correcta </td>";
                        }
                        else
                        {
                            echo "<td> Contraseña incorrecta </td>";
                        }
                        mysqli_close($conexion);
                    }
                ?>
            </tr>
        </form>
    </table>
    
</body>
</html>