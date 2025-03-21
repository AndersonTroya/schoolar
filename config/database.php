<?php

    //config connecton
    $host = "localhost";//servidor
    $port = "5432";//de la BD
    $dbname = "schoolar";
    $user = "postgres";
    $password = "unicesmag";

    //Create connection (los sin $ no se alteran, son parametros de postgres)
    $conn = pg_connect("
        host = $host
        port = $port
        dbname = $dbname
        user = $user
        password = $password
    ");

    if(!$conn){
        die("Connection error" . pg_last_error());
    }else{
        echo "Success  connection";
    }
?>