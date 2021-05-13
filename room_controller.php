<?php
    // stringa che serve per chiamare gli elementi nel db
    // $sql = "SELECT * FROM `stanze`";
    // $result= $conn -> query($sql);
    // var_dump( $result); 
    require_once "connection.php";

    function get_rooms(){
        global $conn;
        $sql = "SELECT * FROM stanze";
        return $conn -> query($sql);
    }
    function create_room($room_number,$floor,$beds){
        global $conn;
        $sql="INSERT INTO stanze (room_number,floor,beds,created_at,update_at) values(?,?,?,NOW(),NOW())";
        
    }
?>
