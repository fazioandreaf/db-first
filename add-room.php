<form action="" method="POST">
    <p>
        <label for="">Room Number</label>
        <input type="number" name="room_number">
        <label for="">floor</label>
        <input type="number" name="floor">
        <label for="">Beds</label>
        <input type="number" name="beds">
        
    </p>

    <button type="submit">Add</button>
</form>
<?php
$room_number= isset($_POST['room_number'])?$_POST['room_number']:null;
$floor= isset($_POST['floor'])?$_POST['floor']:null;
$beds= isset($_POST['beds'])?$_POST['beds']:null;
if($floor && $beds && $room_number)
echo $room_number.' - '.$floor.' - '.$beds;
