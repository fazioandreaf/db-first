<?php
    require_once "connection.php";

$id=$_GET['id'];
echo $id;
    function get_prenotazioni(){
        global $conn;
        $sql = "SELECT * FROM prenotazioni";
        return $conn -> query($sql);
    }


?>