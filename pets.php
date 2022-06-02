<?php 
session_start();
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');

$animalId = $_GET["animalId"];
$specieId = $_GET["specieId"];
$sql = "SELECT * FROM species where id = ".$specieId;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="card">
    <div class="card-container">
        <?php
		$sql = "SELECT pets.id, species.name as specie, pets.description, pets.image, pets.name, pets.gender, pets.age, pets.action from pets, species where pets.specieId = ".$specieId." and species.id = pets.specieId";
		$result = $conn->query($sql);
        $index = 0;
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				?>
        <div class="card-content">
            <img src="assets/img/<?= $row["image"] ?>" alt="animal" width="150px" height="150px" /><br>
            <span style="font-size: 23px"><b><?= $row["name"] ?></b></span>
            <span class="pet-specie"><?= $row["specie"] ?></span>
            <span class="pet-description"><?= $row["description"] ?></span>
            <?php
            if($row["action"] == 1) {
            ?>
            <button type="button" onclick="openModal(<?= $row['id'] ?>)" class="infoButton">Részletek</button>
            <button onclick="toggleHeart(event)"><i class="fas fa-heart" style="font-size: 20px"></i></button>
            <?php
            }
            else {
                ?>
                <button type="button" class="infoButtonDis" disabled>Részletek</button>
                <span class="adopted">ÖRÖKBEFOGADVA!</span>
            <?php  
            }
            ?>
        </div>
        

        <div class="bg-modal <?= "bg-modal-".$row['id'] ?>">
            <div class="modal-content">
                <div class="leftSide">
                    <img src="assets/img/<?= $row["image"] ?>" alt="animal" width="50%" height="70%" />
                </div>
                <div class="rightSide">
                    <span class="modalTitle">Fajta</span>
                    <span><?= $row["specie"] ?></span>
                    <span class="modalTitle">Név</span>
                    <span><?= $row["name"] ?></span>
                    <span class="modalTitle">Nem</span>
                    <span><?= $row["gender"] ?></span>
                    <span class="modalTitle">Kor</span>
                    <span><?= $row["age"] ?></span>
                    <span class="modalTitle">Leírás</span>
                    <span><?= $row["description"] ?></span>
                    <div class="modalButton">
                        <a href="adopt.php?animalId=<?= $animalId ?>&petId=<?= $row["id"] ?>"><button type="submit" value="Submit" class="adoptButton">Örökbefogadás</button></a>
                    </div>
                </div>
                <div class="close1" onclick="closeModal(event)">+</div>
            </div>
        </div>
        <script src="assets/js/main.js"></script>
        <?php
        $index++;
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