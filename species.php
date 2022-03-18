<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');
$animalId = $_GET["animalId"];
?>
<div class="animal">
    <p>Válassz a kategóriáink közül</p>
    <div class="animal-container">
        <?php
		$sql = "SELECT species.id, species.name, species.image FROM animals, species, animal_specie WHERE animals.id = ".$animalId." AND animals.id = animal_specie.animal_id AND species.id = animal_specie.specie_id";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				?>
        <div class="animal-box">
            <a href="pets.php?animalId=<?= $animalId ?>&specieId=<?= $row["id"] ?>">
                <div class="animal-image">
                    <span class="animal-title"><?= $row["name"] ?></span>
                    <img src="assets/img/<?= $row["image"] ?>" alt="animal" width="150px" height="150px" />
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