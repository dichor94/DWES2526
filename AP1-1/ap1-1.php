<?php

$data = [];

$key = $_GET["clave"];
$value = $_GET["valor"];

$data[$key] = $value;


//Pongo isset para que compruebe que no es NULL
if($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET["clave"]) and isset($_GET["valor"])){

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

