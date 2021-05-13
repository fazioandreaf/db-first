<?php

    $server ='localhost';
    $user = 'root';
    $password = 'root';
    $db = 'dbhotel';
    $host = 'localhost';
    $port = 3306;
    $conn = new mysqli($server,$user,$password,$db);
    if($conn && $conn -> connect_error)
        var_dump  ($conn) ;
        else
        // var_dump  ($conn) ;
?>
