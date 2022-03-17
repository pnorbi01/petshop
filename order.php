<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');

$mealId = $_GET["mealId"];
$restaurantId = $_GET["restaurantId"];

$sql = "select * from meals where id = ".$mealId; 
$result = $conn->query($sql);
$mealResult = $result->fetch_assoc();

$sql = "select * from restaurants where id = ".$restaurantId;
$result = $conn->query($sql);
$restaurantResult = $result->fetch_assoc();

$sum = $restaurantResult["deliveryFee"] + $mealResult["price"];

?>
<div id="rendelesleadas">
    <form method="post" id="rendeles">
        <label for="salad">Kiválasztott étel</label>
        <input type="text" disabled value="<?= $mealResult["name"] ?>">
        <label for="email">EMAIL*</label>
        <input type="email" id="email" name="email" required placeholder="example@gmail.com">
        <label for="address">lakcím*</label>
        <input type="text" id="address" name="address" required placeholder="Adja meg lakcímét">
        <label for="payment">fizetési mód*</label>
        <select id="payment" name="payment" required>
            <option selected disabled>Válassza ki a fizetési módot</option>
            <option value="Bankkártya">Bankkártya (MasterCard, PayPal, Visa)</option>
            <option value="Készpénz">Készpénz</option>
        </select>
        Kiszállítási díj: <?= $restaurantResult["deliveryFee"] ?> din
        <br>
        Termék díj: <?= $mealResult["price"] ?> din
        <br>
        Összesen: <?= $sum ?>
        <input type="submit" value="megrendelés leadása">
    </form>
</div>
<?php
require_once('assets/php/footer.php');
?>
</body>

</html>