<?php

$data = [];





//Pongo dos variables diferentes para hacer el ejercicio, lo ideal es usar una sesión para que no se borre nada cuando lo estemos usando.

if($_SERVER["REQUEST_METHOD"] == "GET"){

    $key1 = $_GET["clave1"];
    $value1 = $_GET["valor1"];
    $key2 = $_GET["clave2"];
    $value2 = $_GET["valor2"];
    $data[$key1] = $value1;
    $data[$key2] = $value2;


    foreach ($data as $key => $value) {

        if($value == "null" or $value == ""){

            print "El valor de la clave $key es null o está vacío<br>";


        }elseif (is_numeric($value)){

            print "El valor de la clave $key es $value y es un número<br>";


        }else{

            print "El valor de la clave $key es $value y es un string<br>";


        }
    }

}


