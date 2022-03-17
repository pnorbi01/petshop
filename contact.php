<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="contact_bg">
    <div class="contact_bg_content">
        <span>Lépj velünk kapcsolatba</span>
    </div>
</div>
<div id="kapcsolaturpal">
    <form method="post" id="kapcsolat">
        <label for="fname">Keresztneve</label>
        <input type="text" id="fname" name="firstname" required placeholder="Keresztneve..">

        <label for="lname">Vezetékneve</label>
        <input type="text" id="lname" name="lastname" required placeholder="Vezetékneve..">

        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" required placeholder="example@gmail.com">

        <label for="rendeles">Kérdés</label>
        <select id="rendeles" name="rendeles">
            <option selected disabled>Miben segíthetünk?</option>
            <option value="Hová tűnt a megrendelésem?">Mi a legjobb a kiskedvencem számára?</option>
            <option value="Tudom módosítani/törölni a megrendelésem?">Tudom módosítani/törölni a lefoglalásomat?
            </option>
        </select>

        <label for="uzenet">Üzenet</label>
        <textarea id="uzenet" name="uzenet" required placeholder="Irja le üzenetét.."></textarea>

        <input type="submit" value="Elküld">
    </form>
</div>
<?php
require_once('assets/php/footer.php');
?>
</body>

</html>