<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');

$animalId = $_GET["animalId"];
$specieId = $_GET["specieId"];
$sql = "SELECT * FROM species where id = ".$specieId;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div id="pet-background">
    <span><?= $row["name"] ?></span>
</div>
<div class="card">
    <div class="card-container">
        <?php
		$sql = "SELECT pets.id, pets.name, pets.description, pets.image, pets.price from pets, species, pet_specie where species.id = ".$specieId." and pet_specie.specie_id = species.id and pets.id = pet_specie.pet_id";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				?>
        <div class="card-content">
            <img src="assets/img/<?= $row["image"] ?>" alt="animal" width="150px" height="150px" />
            <hr style="width:80%; color: black; margin: 0 auto; margin-top: 30px"><br>
            <span style="font-size: 23px"><b><?= $row["name"] ?></b></span>
            <span class="pet-description"><?= $row["description"] ?></span>
            <button id="button" type="button" class="infoButton">Részletek</button>
            <button onclick="Toggle1()" id="heartButton"><i class="fas fa-heart" style="font-size: 20px"></i></button>
        </div>
        

        <div class="bg-modal">
            <div class="modal-content">
                <div class="leftSide">
                    <img src="assets/img/<?= $row["image"] ?>" alt="animal" width="50%" height="70%" />
                </div>
                <div class="rightSide">
                    <span class="modalTitle">Fajta</span>
                    <span><?= $row["name"] ?></span>
                    <span class="modalTitle">Leírás</span>
                    <span><?= $row["description"] ?></span>
                    <span class="modalTitle">Ár</span>
                    <span><?= $row["price"] ?> EUR</span>
                    <div class="modalButton">
                    <a href="adopt.php?animalId=<?= $animalId ?>&petId=<?= $row["id"] ?>"><button type="submit" value="Submit" class="adoptButton">Örökbefogadás</button></a>
                    </div>
                </div>
                <div id="close">+</div>
            </div>
        </div>
        <script src="assets/js/main.js"></script>
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