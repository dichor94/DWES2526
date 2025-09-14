<?php


//Array con los valores que pide el ejercicio.
$numeros = [

    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",

];

$suma = 0;
foreach ($numeros as $key => $value){


    //echo $key . ": " .  $value . "<br>"; --> prueba para ver que funciona el recorrido

    if($value == "primero" or $value == "tercero" or $value == "quinto"){

        $impar = true;
        $par = false;
        $suma += $key;

        if($suma > 5 and $suma < 10){

            print "<strong>La suma es mayor de 5 </strong><br><br>";

        }else if($suma > 10 and $suma < 20){

            print "<strong>La suma es mayor de 10</strong> <br><br>";

        }else if($suma > 20 and $suma < 30){

            print "<strong>La suma es mayor de 20 </strong><br><br>";

        }


        echo "Estas en una posición impar siendo la posición $value . <br>";
        echo "La suma en estos momentos es de $suma <br><br>";



    }else{

        $par = true;
        $impar = false;
        $suma += $key;

        if($suma > 5 and $suma < 10){

            print "<strong>La suma es mayor de 5 </strong><br><br>";

        }else if($suma > 10 and $suma < 20){

            print "<strong>La suma es mayor de 10</strong> <br><br>";

        }else if($suma > 20 and $suma < 30){

            print "<strong>La suma es mayor de 20 </strong><br><br>";

        }

        echo "Estas en una posición par siendo la posición $value <br>";
        echo "La suma en estos momentos es de $suma <br><br>";

    }

}