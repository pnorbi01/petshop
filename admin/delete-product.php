<?php
require_once('../config/db.php');

$mealId = $_GET["mealId"];
$sql = "DELETE FROM meals WHERE id = ".$mealId;

if(mysqli_query($conn, $sql)) {
    echo "<h1>Sikeres törlés</h1>";
}
else {
    echo "<h1>Sikertelen törlés</h1>";
}

?>