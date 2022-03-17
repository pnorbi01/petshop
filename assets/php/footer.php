<footer>
    <div class="upper-footer">
        <div class="left">
            <ul>
                <li class="title">Social Media</li>
                <li><a href="http://www.facebook.com">Facebook</a></li>
                <li><a href="http://www.instagram.com">Instagram</a></li>
                <li><a href="http://www.twitter.com">Twitter</a></li>
                <li> <a href="http://www.linkedin.com">LinkedIn</a></li>
            </ul>
            <ul>
                <li class="title">5Shop</li>
                <li><a href="about.php">Rólunk</a></li>
                <li><a href="contact.php">Kapcsolat</a></li>
                <li><a href="news.php">Hírek</a></li>
            </ul>
        </div>
        <div class="right">
            <a href="#top">
                <i style="font-size:24px" class="fa arrow-up">&#xf077;</i>
            </a>
        </div>
    </div>
    <div class="copyright">
        <span><i style="font-size:15px" class="fa">&#xf1f9;</i> 2022 5Shop. Minden jog fenntartva.</span>
        <ul>
            <li><i style="font-size:24px" class="fa">&#xf1f1;</i></li>
            <li><i style="font-size:24px" class="fa">&#xf1f4;</i></li>
            <li><i style="font-size:24px" class="fa">&#xf1f0;</i></li>
        </ul>
    </div>
</footer>
<style>
footer {
    border-top: 1px solid black;
    padding: 1em;
}

footer ul,
footer li {
    margin: 0;
    padding: 0;
    list-style: none;
}

footer a {
    color: black;
    text-decoration: none;
}

.upper-footer {
    display: flex;
    justify-content: flex-end;
    text-align: left;
}

.upper-footer .left {
    display: flex;
    align-items: flex-start;
    gap: 2em;
}

.upper-footer li.title {
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
}

footer li a:hover {
    text-decoration: underline;
}

.copyright {
    font-size: .8em;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1em;
}

.copyright ul {
    display: flex;
    gap: .5em;
}

.arrow-up:hover {
    animation: shake 0.5s;
    animation-iteration-count: infinite;
}

@keyframes shake {
    0% {
        transform: translate(1px, 1px) rotate(0deg);
    }

    10% {
        transform: translate(-1px, -2px) rotate(-1deg);
    }

    20% {
        transform: translate(-3px, 0px) rotate(1deg);
    }

    30% {
        transform: translate(3px, 2px) rotate(0deg);
    }

    40% {
        transform: translate(1px, -1px) rotate(1deg);
    }

    50% {
        transform: translate(-1px, 2px) rotate(-1deg);
    }

    60% {
        transform: translate(-3px, 1px) rotate(0deg);
    }

    70% {
        transform: translate(3px, 1px) rotate(-1deg);
    }

    80% {
        transform: translate(-1px, -1px) rotate(1deg);
    }

    90% {
        transform: translate(1px, 2px) rotate(0deg);
    }

    100% {
        transform: translate(1px, -2px) rotate(-1deg);
    }
}
</style>