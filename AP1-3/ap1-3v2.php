<?php


$numeros = [

    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",

];

$suma = 0;
$posicion = 1;
foreach ($numeros as $key => $value){

    $suma += $key;

    if($suma > 5 and $suma < 10){

        print "<strong>El valor de la suma es mayor de 5</strong><br><br>";

    }else if($suma > 10 and $suma < 20){

        print "<strong>El valor de la suma es mayor de 10</strong><br><br>";

    }else if($suma > 20 and $suma < 30){

        print "<strong>El valor de la suma es mayor de 20</strong><br><br>";

    }


    if($posicion % 2 == 1) {


        $impar = true;
        $par = false;

        print "Estás en una posición impar<br><br>";

        $posicion += 1;

    }else if($posicion % 2 == 0) {


        $par = true;
        $impar = false;

        print "Estás en una posición par<br><br>";

        $posicion += 1;

    }


}