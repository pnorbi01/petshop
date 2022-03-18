<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="news">
    <div id="newsletter-form">
        <div class="newsletter">
            <i style="font-size:35px" class="fa">&#xf0e0;</i>
            <p>Iratkozz fel hírlevelünkre, hogy ne maradj le a legújabb kiskedvencekről.</p>
            <form method="post" id="newsletter">
                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" class="mainInput" required placeholder="example@gmail.com">

                <input type="submit" value="Feliratkozás">
            </form>
        </div>
    </div>
</div>
<?php
require_once('assets/php/footer.php');
?>
</body>
</html>