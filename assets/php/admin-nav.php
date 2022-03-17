<nav>
    <ul>
        <li><a href="../restaurants.php">éttermek</a></li>
        <li><a href="../news.php">hírek</a></li>
        <li><a href="../contact.php">kapcsolat</a></li>
        <li><a href="../about.php">rólunk</a></li>
        <li><a href="../register.php">regisztráció</a></li>
        <li><a href="admin.php">admin</a></li>
    </ul>
    <a href="../index.php" class="logo"><i class="fa fa-plane" style="font-size:24px"></i>FoodFly</a>
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

</style>