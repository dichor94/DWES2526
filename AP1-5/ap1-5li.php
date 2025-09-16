<?php

$host = "servidor_db";
$username = "root";
$password = "root";
$database = "AP1";


//Es la primera vez que uso el try-catch, es hora de probarlo y buscar por la red como funciona con ejemplos
try{

    $mysqli = new mysqli($host, $username, $password, $database);
    print "<strong>Conexión realizada correctamente a la base de datos $database</strong> <br><br>";


    //Añado una excepción por si hay un error en la bbdd
    if($mysqli->connect_error){

        throw new exception("Fallo en la conexión a la BBDD $database: ". $mysqli->connect_error);

    }

    //Querys

    //SELECT

    $sqlSelect = "SELECT id, nombre, estado FROM usuarios";
    $result = $mysqli->query($sqlSelect);




}catch (exception $error){

    print $e = $error->getMessage();
    exit(); //Para el script si llega al catch, he mirado en internet que es mejor ponerlo aquí.



}