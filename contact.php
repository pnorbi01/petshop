<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="contact">
    <div class="contact-title">
        <span>Lépj velünk kapcsolatba</span>
    </div>
</div>
<div id="contact-form">
    <form method="post" id="contactId">
        <label for="fname">Keresztneve</label>
        <input type="text" id="fname" name="firstname" required placeholder="Keresztneve..">

        <label for="lname">Vezetékneve</label>
        <input type="text" id="lname" name="lastname" required placeholder="Vezetékneve..">

        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" required placeholder="example@gmail.com">

        <label for="question">Kérdés</label>
        <select id="question" name="question">
            <option selected disabled>Miben segíthetünk?</option>
            <option value="Hová tűnt a megrendelésem?">Mi a legjobb a kiskedvencem számára?</option>
            <option value="Tudom módosítani/törölni a megrendelésem?">Tudom módosítani/törölni a lefoglalásomat?
            </option>
        </select>

        <label for="message">Üzenet</label>
        <textarea id="message" name="message" required placeholder="Irja le üzenetét.."></textarea>

        <input type="submit" value="Elküld">
    </form>
</div>

<?php
require_once('assets/php/footer.php');
?>
</body>

</html>