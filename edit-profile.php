<?php
session_start();
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div class="edit-profile-title">
    <h1>Profil adatainak szerkesztése</h1>
</div>
<hr style="width: 80%">
<div id="edit-profile-container">
    <div id="edit">
        <div id="edit-form">
            <div class="edit-main">
                <i class="fa">&#xf044;</i>
                <form method="post" id="editProfile" action="#">
                    <div style="display: flex; gap: 1em;">
                        <div style="width: 50%">
                            <label for="userName">FELHASZNÁLÓNÉV</label>
                            <input type="text" id="userName" name="username" disabled placeholder="<?= $_SESSION['username'] ?>">

                            <label for="fName">KERESZTNÉV</label>
                            <input type="text" id="fName" name="firstname" required placeholder="Keresztnév..">

                            <label for="lName">VEZETÉKNÉV</label>
                            <input type="text" id="lName" name="lastname" required placeholder="Vezetéknév..">
                        </div>
                        <div style="width: 50%">
                            <label for="email">EMAIL</label>
                            <input type="email" id="email" name="email" class="mainInput" required placeholder="example@gmail.com">

                            <label for="firstPassword">JELSZÓ</label>
                            <input type="password" id="firstPassword" name="password" required placeholder="Jelszó..">

                            <label for="secondPassword">JELSZÓ ISMÉT</label>
                            <input type="password" id="secondPassword" name="passwordConfirm" required placeholder="Jelszó ismét..">
                        </div>
                    </div>
                    <input type="submit" value="Adatok mentése">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once('assets/php/footer.php');
?>