<?php

$data = [];

$key = $_GET["clave"];
$value = $_GET["valor"];

$data[$key] = $value;

if($_SERVER["REQUEST_METHOD"] == "GET" and $key and $value){

    print("Se ha recibido $value para la clave $key <br>");

}


if(count($data) > 0){

    print("Los contenidos clave - valor son los siguientes <br>");
    foreach ($data as $key => $value){

        print($key . ":". $value . "<br>");

    }
}else{

    print("No hay contenido en el array");

}

