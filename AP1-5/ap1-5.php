<?php
//Conexión a la base de datos

$host = "servidor_db";
$username = "root";
$password = "root";
$database = "AP1";

try{

    $pdoConnect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    print "<strong>Conexión realizada correctamente a la base de datos $database</strong> <br><br>";

    //Querys

    //SELECT
    $stmtSelect = $pdoConnect->prepare("SELECT id, nombre, estado FROM usuarios");
    $stmtSelect->execute();
    $arraySelect = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);


    if(count($arraySelect) > 0){

        foreach($arraySelect as $value){

            print "El usuario con nombre " . $value["nombre"] . " posee la id " . $value["id"] . " y su estado es " . $value["estado"] . "<br>";


        }

    }else{

        print "No hay resultados en esta tabla<br>";


    }


}catch (PDOException $error){

    print die("Error!:" . $error->getMessage());

}


