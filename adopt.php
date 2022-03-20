<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');

$petId = $_GET["petId"];
$animalId = $_GET["animalId"];

$sql = "SELECT * FROM pets WHERE id = ".$petId; 
$result = $conn->query($sql);
$petResult = $result->fetch_assoc();

$sql = "SELECT * FROM animals WHERE id = ".$animalId;
$result = $conn->query($sql);
$animalResult = $result->fetch_assoc();

?>
<div id="adopt">
    <form method="post" id="adopt">
        <label for="salad">Kiválasztott állat</label>
        <input type="text" disabled value="<?= $petResult["name"] ?>">
        <label for="lname">Vezetéknév*</label>
        <input type="text" id="lname" name="lname" required placeholder="Vezetékneve..">
        <label for="fname">Keresztnév*</label>
        <input type="text" id="fname" name="fname" required placeholder="Keresztneve..">
        <label for="email">EMAIL*</label>
        <input type="email" id="email" name="email" required placeholder="example@gmail.com">
        <label for="address">Lakcím*</label>
        <input type="text" id="address" name="address" required placeholder="Adja meg lakcímét">
        <label for="payment">Fizetési mód*</label>
        <select id="payment" name="payment" required>
            <option selected disabled>Válassza ki a fizetési módot</option>
            <option value="Bankkártya">Bankkártya (MasterCard, PayPal, Visa)</option>
            <option value="Készpénz">Készpénz</option>
        </select>
        Összesen: <?= $petResult["price"] ?> EUR
        <input type="submit" value="Örökbefogadom">
    </form>
</div>
</body>

</html>