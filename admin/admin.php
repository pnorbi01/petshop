<?php
require_once('../assets/php/header-admin.php');
require_once('../assets/php/admin-nav.php');
require_once('../config/db.php');

$sql = "SELECT * FROM meals";
$result = $conn->query($sql);

?>
<div id="products">
    <table>
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>ACTION</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><img src="../assets/img/<?=$row["image"]?>" /></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["description"] ?></td>
            <td><?= $row["price"] ?></td>
            <td>
            <a href="modify-product.php?mealId=<?= $row["id"] ?>"><button type="submit" name="sb" value="update">MÓDOSITÁS</button></a>
                <a href="delete-product.php?mealId=<?= $row["id"] ?>"><button type="reset" name="rs" value="delete">TÖRLÉS</button></a>
            </td>
        <?php
        }
        ?>
    </table>
    <a href="add-product.php"><button type="submit" name="sb" value="addnew">ÚJ TERMÉK HOZZÁADÁSA</button></a>
</div>
<?php
require_once('../assets/php/footer.php');
?>
</body>
</html>