<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'testeo';

    $coneccion = mysqli_connect($server, $username, $password, $database);

    if(!$coneccion){
        echo 'Error en la coneccion';
    }
    echo 'Coneccion exitosa';

?>