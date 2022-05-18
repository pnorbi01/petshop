<script type="text/javascript">
    window.addEventListener("load", function (){
       const loader = document.querySelector(".loader");
       loader.className += " hidden";
    });
</script>

<button onclick="topFunction()" id="myBtn" title="Vissza a tetejére"><i style="font-size:24px" class="fa arrow-up">&#xf077;</i></button>

<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.transform = "scale(1)";
  } else {
    mybutton.style.transform = "scale(0)";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>


<div class="loader">
    <img src="assets/img/downloading.gif">
</div>

<nav>
    <ul>
    <li><a href="index.php">Kezdőlap</a></li>
        <!-- <li><a href="news.php">Hírek</a></li> -->
        <li><a href="contact.php">Kapcsolat</a></li>
        <li><a href="animals.php">Kiskedvencek</a></li>
        <li><a href="about.php">Rólunk</a></li>
        <li><a href="register/logout.php">Kijelentkezés</a></li>
    </ul>
    <div>
        <span style="margin-right: 15px; font-family: 'Oswald', sans-serif; text-transform: uppercase; font-weight: bolder; font-size: 15px" >Üdv, <?= $_SESSION['username'] ?></span>
        <a href="index.php" class="logo"><i style='font-size:24px' class='fas'>&#xf1b0;</i>Petadopt</a>
    </div>
</nav>


<style>

nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    padding: 0 2em;
    z-index: 1;
    background: rgba(255, 255, 255, .5);
}

nav ul,
nav li {
    margin: 0;
    padding: 0;
}

nav ul {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    gap: 1em;
}

nav a {
    font-weight: bolder;
    font-size: 15px;
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 280ms ease-in-out;
}

nav a:hover {
    color: dimgrey;
    letter-spacing: .1em;
}


.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader img {
    width: 150px;
}

.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100%{
        opacity: 0;
        visibility: hidden;
    }

} 

</style>