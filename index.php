<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');
?>
<div id="container">
    <div class="content">
        <h1>5Shop.</h1>
        <small>Ahol a kiskedvencek gazdára találnak.</small>
        <!-- <form method="post" action="search.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search" style="font-size: 15px"></i></button>
        </form> -->
    </div>
</div>
<div id="searcher">
    <div class="search-container">
        <form method="post" action="search.php">
            <input type="text" placeholder="Keresés.." name="search">
            <button type="submit"><i class="fa fa-search" style="font-size: 15px"></i></button>
        </form>
    </div>
</div>
<hr>
<div id="hirek_main">
    <div class="hirek_content">
        <h1>HÍREK</h1>
        <span>Íratkozz fel hírlevelünkre, hogy az elsők közt legyél, akik értesülnek
            legújabb akcióinkról és híreinkről. Az alábbi gombon keresztül feliratkozhatsz. <br><b>NE
                HABOZZ!</b></span><br>
        <a href="news.php"><button>FELIRATKOZÁS</button></a>
    </div>
</div>
<div id="rendeles_main">
    <div class="rendeles_content">
        <span>Nálunk biztosan megtalálod, amire szükséged van.<br>Több mint 100 fajta kiskedvenc vár gazdára.</span><br>
        <a href="restaurants.php"><button>MEGTEKINTÉS</button></a>
    </div>
</div>
<div id="rolunk_main">
    <div class="rolunk_content">
        <h1>RÓLUNK</h1>
        <span><span class="ff"><i style='font-size:30px' class='fas'>&#xf1b0;</i>5Shop.</span> - Állatok
            örökbefogadása</span>
        <span>Az alábbi gombra kattintva megtudhatsz többet a cégünkről és sok minden másról.</span><br>
        <a href="about.php"><button>TUDJ MEG TÖBBET</button></a>
    </div>
</div>
<div id="kapcsolat_main">
    <div class="kapcsolat_content">
        <h1>KAPCSOLAT</h1>
        <span>Lépj velünk kapcsolatba bátran, ügyfeleink rövid időn belül felveszik Önnel a kapcsolatot.</span>
        <span>Tedd meg Te az első lépést, hogy megoldjuk a problémádat.</span><br>
        <a href="contact.php"><button>KAPCSOLAT</button></a>
    </div>
</div>
<?php
require_once('assets/php/footer.php');
?>
</body>

</html>