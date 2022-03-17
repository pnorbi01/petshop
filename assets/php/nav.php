<!-- <nav>
    <ul>
        <li><a href="restaurants.php">éttermek</a></li>
        <li><a href="news.php">hírek</a></li>
        <li><a href="contact.php">kapcsolat</a></li>
        <li><a href="about.php">rólunk</a></li>
        <li><a href="register.php">regisztráció</a></li>
        <li><a href="admin/admin.php">admin</a></li>
    </ul>
    <a href="index.php" class="logo"><i style='font-size:24px' class='fas'>&#xf1b0;</i>5Shop</a>
</nav> -->

<script type="text/javascript">
    window.addEventListener("load", function (){
       const loader = document.querySelector(".loader");
       loader.className += " hidden";
    });
</script>

<div class="loader">
    <img src="assets/img/downloading.gif">
</div>
<div class="navigation">
        <ul>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="index.php">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="title">Kezdőlap</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="index.php">
                    <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
                    <span class="title">Keresés</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="index.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">Profil</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="news.php">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title">Hírek</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="about.php">
                    <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
                    <span class="title">Rólunk</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="restaurants.php">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Beállitások</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title">Kijelentkezés</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="admin/admin.php">
                    <span class="icon"><ion-icon name="finger-print-outline"></ion-icon></span>
                    <span class="title">Admin</span>
                </a>
            </li>
        </ul>
    </div> 

    <div class="toggle">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>

    let menuToggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation')
    menuToggle.onclick = function (){
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
    }

        let list = document.querySelectorAll('.list');
        for (let i=0; i<list.length; i++){
            list[i].onclick = function(){
                let j = 0;
                while(j<list.length){
                    list[j++].className = 'list';
                }
                list[i].className = 'list active';
            }
        }
    </script>

<style>

/* *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
} */

.navigation{
    position: fixed;
    top:20px;
    left: 20px;
    bottom: 20px;
    width: 70px;
    border-radius:10px;
    box-sizing: initial;
    border-left: 5px solid black;
    background: black;
    opacity: 90%;
    overflow-x: hidden;
    transition: 1s;
}

.navigation.active{
 width: 300px;
}

.navigation ul{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding-left: 5px;
    padding-top: 40px;
}

.navigation ul li {
    position: relative;
    list-style: none;
    width: 100%;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}

.navigation ul li.active{
    background: #fff;
}

.navigation ul li.active a{
    color: #333;
}

.navigation ul li b:nth-child(1){
    position: absolute;
    top:-20px;
    height: 20px;
    width: 100%;
    background: #fff;
    display: none;
}

.navigation ul li b:nth-child(1)::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-bottom-right-radius: 20px;
    background: black;
}

.navigation ul li b:nth-child(2){
    position: absolute;
    bottom:-20px;
    height: 20px;
    width: 100%;
    background: #fff;
    display: none;
}

.navigation ul li b:nth-child(2)::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-top-right-radius: 20px;
    background: black;
}

.navigation ul li.active b:nth-child(1),
.navigation ul li.active b:nth-child(2)
{
    display: block;
}

.navigation ul li a{
    position: relative;
    display: block;
    width: 100%;
    display: flex;
    text-decoration: none;
    color: #fff;
}

.navigation ul li a .icon{
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height: 70px;
    text-align: center;
}
.navigation ul li a .icon ion-icon{
    font-size: 1.5em;
}

.navigation ul li a .title{
    position: relative;
    display: block;
    padding-left: 10px;
    height: 60px;
    line-height: 60px;
    white-space: normal;
    text-transform: uppercase;
}

.toggle{
    position: fixed;
    top:20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: black;
    opacity: 90%;
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
}

.toggle.active{
    background: #ff4d89;
}

.toggle ion-icon
{
    position: absolute;
    color: #fff;
    font-size: 34px;
    display: none;
}

.toggle ion-icon.open,
.toggle.active ion-icon.close{
    display: block;
}
.toggle ion-icon.close,
.toggle.active ion-icon.open{
    display: none;
}

.loader{
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

.loader img{
    width: 150px;
}

.loader.hidden{
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100%{
        opacity: 0;
        visibility: hidden;
    }

} 







/*nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    padding: 0 2em;
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
}*/

</style>