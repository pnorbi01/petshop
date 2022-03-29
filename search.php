<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');

if(isset($_POST["search"]) && !empty($_POST["search"])) {
    $search = "%".$_POST["search"]."%";
    $sql = "SELECT * FROM pets where price like '$search' or name like '$search'";
    $result = $conn->query($sql);

    ?>
<div class="card">
    <div class="card-container">
        <?php
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
        <div class="card-content">
            <img src="assets/img/<?= $row["image"] ?>" alt="animal" width="150px" height="150px" /><br>
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
                        <button type="submit" value="Submit" class="adoptButton">Örökbefogadás</button>
                    </div>
                </div>
                <div id="close">+</div>
            </div>
        </div>

        <script src="assets/js/main.js"></script>

        <?php
}
}
else {
    echo "<h1>Nincs találat!</h1>";
}
}
else {
?>
        <?php
    echo "<h1>Nincs találat!</h1>";
    ?>
    </div>
</div>
</body>

</html>
<?php
}