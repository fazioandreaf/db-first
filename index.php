<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <style>
        body {
            background: purple;
            color: white;
        }
        .allCard{
            display: flex;
            flex-wrap: wrap;
        }
        .card{
            flex-basis:20%;
            margin:1%;
            background-color:green;
            text-align:center;
        }
        .container{
            width:100%;
            display:flex;
            flex-direction:column;
            align-items:center;
        }
    </style>
    <script>
    </script>
    <title>DB ospiti</title>
</head>
<body>
<!-- Pagina con la lista delle stanze,
un click porta al dettaglio della
stanza -->
        <div class="container"><h1>Lista delle stanze</h1>
        <?php
            require_once "room_controller.php";
            $result=get_rooms();
            if ($result && $result->num_rows > 0) {
                // output data of each row
                while($singoloRisultato = $result->fetch_assoc()) {
                echo '<a href="/prenotazione.php?id='. $singoloRisultato['id'] .'">'."Stanza N. ". $singoloRisultato['room_number']. " piano: ".$singoloRisultato['floor']. ' con n° '.$singoloRisultato['beds'].'</a>' ;
                }
            } elseif ($result) {
                    echo "0 results";
            } else {
                echo "query error";
            }
                $conn->close();

            
        ?>
        </div>
        <a href="./add-room.php">Add room</a>
</body>
</html>