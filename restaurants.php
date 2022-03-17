<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');
?>
<div class="restaurants">
    <p>Válassz állatok közül</p>
    <div class="restaurant-container">
        <?php
		$sql = "SELECT * FROM animals";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				?>
        <div class="restaurant-box">
            <a href="menus.php?restaurantId=<?= $row["id"] ?>">
                <div class="restaurant-image">
                    <span class="restaurant-title"><?= $row["name"] ?></span>
                    <img src="assets/img/<?= $row["image"] ?>" alt="pizza-rest" width="350px" height="350px" />
                </div>
            </a>
        </div>
        <?php
			}
		}
	?>
    </div>
</div>
<?php
require_once('assets/php/footer.php');
?>
</body>

</html>