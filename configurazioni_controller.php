<?php
    require_once "connection.php";

$id=$_GET['id'];
    
global $conn;
$sql = "SELECT title FROM prenotazioni JOIN configurazioni ON prenotazioni.configurazione_id=configurazioni.id WHERE stanza_id like $id GROUP BY title";
$descriptionRoom = $conn -> query($sql);

if ($descriptionRoom && $descriptionRoom->num_rows > 0) {
    // output data of each row
    while($singoloRisultato = $descriptionRoom->fetch_assoc()) {
    echo '<a> '. $singoloRisultato['title'] .'</a>' ;
    }
} elseif ($descriptionRoom) {
        echo "0 results";
} else {
    echo "query error";
}




    $conn->close();




?>