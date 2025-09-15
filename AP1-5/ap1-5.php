<?php
//Conexión a la base de datos

$host = "servidor_db";
$username = "root";
$password = "root";
$database = "AP1";

$pdoConnect = new PDO("mysql:host=$host;dbname=$database", $username, $password);

try{

    $pdoConnect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    print "<strong>Conexión realizada correctamente a la base de datos $database</strong> <br><br>";

    //Querys

    //SELECT
    $stmtSelect = $pdoConnect->prepare("SELECT id, nombre, estado FROM usuarios");
    $stmtSelect->execute();
    $arraySelect = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);




}catch (PDOException $error){

    print "Error de conexión!:" . $error->getMessage();

}


    if(count($arraySelect) > 0 and is_array($arraySelect)){

        foreach($arraySelect as $value){

            print "El usuario con nombre " . $value["nombre"] . " posee la id " . $value["id"] . " y su estado es " . $value["estado"] . "<br>";


        }

    }