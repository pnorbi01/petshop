<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="sign-up">
    <div id="sign-up-form">
        <div class="sign-up-main">
            <i class="fa">&#xf2b5;</i>
            <p>Hogyha már rendelkezel fiókkal kattintson a <a href="login.php">Bejelentkezés</a> gombra.</p>
            <form method="post" id="signup">
                <label for="userName">FELHASZNÁLÓNÉV</label>
                <input type="text" id="userName" name="userName" required placeholder="Felhasználónév..">

                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" class="mainInput" required placeholder="example@gmail.com">

                <label for="firstPassword">JELSZÓ</label>
                <input type="password" id="firstPassword" name="firstPassword" required placeholder="Jelszó..">

                <label for="secondPassword">JELSZÓ ISMÉT</label>
                <input type="password" id="secondPassword" name="secondPassword" required placeholder="Jelszó ismét..">
                
                <input type="submit" value="Regisztráció">
            </form>
        </div>
    </div>
</div>
</body>

</html>