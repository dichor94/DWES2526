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

    //Usamos el while, indicando que mientras sea true saque los valores, el propio while cuando vea que sea FALSE (no hay más valores en la tabla)para
    $sqlSelect = "SELECT id, nombre, estado FROM usuarios";
    $result = $mysqli->query($sqlSelect);

    while($row = $result->fetch_assoc()){

        print "El usuario " . $row["nombre"] . " posee el id " . $row["id"] . " y su estado es: " . $row["estado"] . "<br><br>";

    }



    //INSERT

    /*
    $id = 1002;
    $name = "Lola";
    $estate = 1;

    $sqlInsert = "INSERT INTO usuarios (id,nombre, estado) VALUES (? , ? , ?)";

    $stmt = $mysqli->prepare($sqlInsert);
    $stmt->bind_param("isi", $id, $name, $estate);

    if($stmt->execute()){

        print "<strong>Se ha realizado la inserción con la nueva id $id </strong><br><br>";

    }else{

        throw new exception("Se ha producido un error en la inserción " . $mysqli->error);


    }*/


    //UPDATE

    /*
    $selectId = 1001;

    $name = "";

    $selectChange = "SELECT estado FROM usuarios WHERE id = ?";

    $stmt = $mysqli->prepare($selectChange);
    $stmt->bind_param("i",$selectId);

    if($stmt->execute()){

        $state = "";
        $stmt->bind_result($state);
        $stmt->fetch();
        $stmt->close(); //Tenemos que cerrar el comando para poder continuar con el siguiente!!!!

        if($state == 0){

            $sqlFalse = "UPDATE usuarios SET estado = 1 WHERE id = ?";
            $stmt = $mysqli->prepare($sqlFalse);
            $stmt->bind_param("i",$selectId);
            if($stmt->execute()){

                print"Se ha cambiado el estado del usuario a 1";

            }

        }else if($state == 1){

            $sqlTrue = "UPDATE usuarios SET estado = 0 WHERE id = ?";
            $stmt = $mysqli->prepare($sqlTrue);
            $stmt->bind_param("i",$selectId);
            if($stmt->execute()){

                print"Se ha cambiado el estado del usuario a 0";

            }


        }else{

            print"No se ha podido cambiar el estado del usuario";

        }


    }*/















}catch (exception $error){


    $e = $error->getMessage();
    exit("error: $e"); //Para el script si llega al catch, he mirado en internet que es mejor ponerlo aquí.



}