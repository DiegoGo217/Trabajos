<?php
    //USO DE EXPLODE
    $lista_de_frutas="fresa, mango, sandia";
    $lista_frutas_array=explode(",", $lista_de_frutas);
    var_dump($lista_de_frutas);
    echo "<br>";
    var_dump($lista_frutas_array);
    // Recorrer un arreglo con un ciclo foreach
    echo "<br>";
    foreach($lista_frutas_array as $fruta)
    {
        echo "fruta: ", $fruta, "<br>";
    }
    // Crear un arreglo asociativo con
    // Nombre y edades de al menos 5 alumnos
    // Imprimir el arreglo con var_dump
    // Luego, imprimir cada elemento con foreach
?>