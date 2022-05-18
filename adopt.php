<?php 
session_start();
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');

$petId = $_GET["petId"];
$animalId = $_GET["animalId"];

$sql = "SELECT pets.id, species.name as specie, pets.description, pets.image, pets.name, pets.gender, pets.age FROM pets, species WHERE species.id = pets.specieId and pets.id = ".$petId; 
$result = $conn->query($sql);
$petResult = $result->fetch_assoc();

$sql = "SELECT * FROM animals WHERE id = ".$animalId;
$result = $conn->query($sql);
$animalResult = $result->fetch_assoc();

?>
<div id="adopt">
    <form method="post" id="adopt">
        <label for="salad">Kiválasztott állat</label>
        <input type="text" disabled value="<?= $petResult["name"] . ', ' .$petResult["specie"] ?>">
        <label for="lname">Vezetéknév*</label>
        <input type="text" id="lname" name="lname" required placeholder="Vezetékneve..">
        <label for="fname">Keresztnév*</label>
        <input type="text" id="fname" name="fname" required placeholder="Keresztneve..">
        <label for="email">EMAIL*</label>
        <input type="email" id="email" name="email" required placeholder="example@gmail.com">
        <label for="address">Lakcím*</label>
        <input type="text" id="address" name="address" required placeholder="Adja meg lakcímét">
        <input type="submit" value="Örökbefogadom">
    </form>
</div>
</body>

</html>