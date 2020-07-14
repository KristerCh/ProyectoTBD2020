<?php

// $serverName = "mysql:dbname=proyectodb;host=127.0.0.1";
// $usuario = "root";
// $password = "";



// try{
//     $pdo = new PDO($serverName, $usuario, $password);
//     echo "conectado.. ";
// }catch(PDOException $e){
//     echo "Conexion mala :( ".$e->getMessage();
// }

$host = "127.0.0.1";
$user = "root";
$password = "";
$bd = "proyectodb";

$conectar = new mysqli($host, $user, $password, $bd);

if ($conectar->connect_errno) {
    echo "Falló la conexión a MySQL:
    (" . $conectar->connect_errno . ") " . $conectar->connect_error;
}

?>