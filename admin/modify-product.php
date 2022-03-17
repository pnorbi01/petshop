<?php
require_once('../assets/php/header-admin.php');
require_once('../assets/php/admin-nav.php');
require_once('../config/db.php');

$mealId = $_GET["mealId"];

$sql = "select * from meals where id = ".$mealId;
$result = $conn->query($sql);
$meal = $result->fetch_assoc();

$sql = "select * from menu_meal where meal_id = ".$mealId;
$result = $conn->query($sql);
$selectedMenu = $result->fetch_assoc();

$sql = "select * from restaurants";
$restaurants = $conn->query($sql);

$sql = "select * from menus";
$menus = $conn->query($sql);


if(isset($_POST["sb"])) {
    if(isset($_POST["image"]) && !empty($_POST["image"]) && 
        isset($_POST["name"]) && !empty($_POST["name"]) &&
        isset($_POST["description"]) && !empty($_POST["description"]) &&
        isset($_POST["price"]) && !empty($_POST["price"])) {

            $image = $_POST["image"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $restaurant = $_POST["restaurant"];
            $menu = $_POST["menu"];

            $sql1 = "UPDATE meals SET name = '$name', description = '$description', image = '$image', price = '$price' where id = '$mealId'";
            

            if($conn->query($sql1)) {
                $sql2 = "UPDATE menu_meal SET menu_id = '$menu' where meal_id = '$mealId'";
                if($conn->query($sql2)){
                    header("Refresh:0");
                }
            }
    }
}

?>
<div id="adding-new_product">
    <span>Módosítsa a terméket</span>
    <form method="post" action="modify-product.php?mealId=<?=$mealId?>">
        <label for="image">KÉP</label><br>
        <input type="text" id="image" name="image" value="<?= $meal["image"] ?>"><br>
        <label for="name">NÉV</label><br>
        <input type="text" id="name" name="name" value="<?= $meal["name"] ?>"><br>
        <label for="description">LEíRÁS</label><br>
        <input type="text" id="description" name="description" value="<?= $meal["description"] ?>"><br>
        <label for="restaurant">ÉTTEREM</label>
        <select name="restaurant" id="restaurant">
            <?php
                while($row = $restaurants->fetch_assoc()) {
                ?>
                <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
                <?php
                }
            ?>
        </select> 
        <label for="restaurant">MENÜ</label>
        <select name="menu" id="menu">
            <?php
                while($row = $menus->fetch_assoc()) {
                    if($row["id"] == $selectedMenu["menu_id"]) {
                        ?>
                            <option selected="selected" value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
                        <?php
                    }
                    else {
                        ?>
                            <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
                        <?php   
                    }
                }
            ?>
        </select>
        <label for="price">ÁR</label><br>
        <input type="number" id="price" name="price" value="<?= $meal["price"] ?>"><br>
        <button type="submit" name="sb" value="add">MÓDOSITÁS</button>
    </form>
</div>
</body>
</html>