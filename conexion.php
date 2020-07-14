<?php

$serverName = "DESKTOP-C2JN085\MI_EQUIPO";
$connectionInfo = array("Database"=>"ProjectDB", "UID"=>"sa", "PWD"=>"Bonnieandclyde123", "CharacterSet"=>"UTF-8");
$con = sqlsrv_connect($serverName, $connectionInfo);


if($con){
    echo "conexion exitosa";
}else{
    echo "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}

?>