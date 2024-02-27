<?php
    //Arreglo de arreglos
    $personas = array(
        "Alfredo Nava Herrero"=>array(
            "edad"=>14,
            "Peso"=>45,
            "Semestre"=>5
        )
        "Diego Alejandro Villalobos Guzman"=>array(
            "edad"=>18,
            "Peso"=>52,
            "Semestre"=>6
        )
        "Alison Fernanda Valdes Garcia"=>array(
            "edad"=>18,
            "Peso"=>52,
            "Semestre"=>6
        )
        "Guztavo Murillo Gonzales"=>array(
            "edad"=>16,
            "Peso"=>56,
            "Semestre"=>4
        )
    );
    echo "Semestre: ". $personas["Maria"]["Semestre"];//Acceso al item
    echo "<br>";
    echo var_dump($personas);
    
?>