<?php
//Conexión a la base de datos

$host = "servidor_db";
$username = "root";
$password = "root";
$database = "todolist";

$mysqli = new mysqli($host, $username, $password);

if ($mysqli->connect_error) {

    die("Error de conexión: " . $mysqli->connect_error);

}

echo "Conexión exitosa";