<?php
require_once('../assets/php/header-admin.php');
require_once('../assets/php/admin-nav.php');
require_once('../config/db.php');

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

            $sql1 = "INSERT INTO meals (name, description, image, price) values ('$name', '$description', '$image', '$price')";
            

            if($conn->query($sql1)) {
                $sql2 = "INSERT INTO menu_meal VALUES ('$menu', '$conn->insert_id')";
                if($conn->query($sql2)){
                    header("Refresh:0");
                }
            }

    }
}

$sql = "select * from restaurants";
$restaurants = $conn->query($sql);

$sql = "select * from menus";
$menus = $conn->query($sql); 



?>
<div id="adding-new_product">
    <span>Vigye be az új terméket</span>
    <form method="post" action="add-product.php">
        <label for="image">KÉP</label><br>
        <input type="text" id="image" name="image" placeholder="ex. burger.jpg"><br>
        <label for="name">NÉV</label><br>
        <input type="text" id="name" name="name" placeholder="ex. Sajtburger"><br>
        <label for="description">LEíRÁS</label><br>
        <input type="text" id="description" name="description" placeholder="Vigye be a termék leírását"><br>
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
                ?>
                <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
                <?php
                }
            ?>
        </select> 
        <label for="price">ÁR</label><br>
        <input type="text" id="price" name="price" placeholder="Vigye be a termék árát"><br>
        <button type="submit" name="sb" value="add">HOZZÁADÁS</button>
    </form>
</div>
</body>
</html>