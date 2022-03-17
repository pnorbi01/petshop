<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="hirlevel_urlapja">
    <div class="hirlevel">
        <i style='font-size:35px' class='fas'>&#xf2f6;</i>
        <form method="post" id="hirlevel">
            <label for="userName">FELHASZNÁLÓNÉV</label>
            <input type="text" id="userName" name="userName" required placeholder="Felhasználónév..">

            <label for="password">JELSZÓ</label>
            <input type="password" id="password" name="password" class="mainInput" required placeholder="Jelszó..">
            <a href="login.php">Elfelejtett jelszó</a><br>

            <input type="submit" value="Bejelentkezés">
        </form>
    </div>
</div>
</body>

</html>