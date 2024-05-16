<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
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
                            echo "<td> Contraseña Correcta </td>"
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