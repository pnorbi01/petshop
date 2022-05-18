<?php
define("SITE", "http://localhost/petshop/petshop/"); // enter your path on localhost
define("HOST", "localhost");
define("USER", "norbi");
define("PASSWORD", "admin");
define("DATABASE", "pet");
define("SECRET", "gfhUi34xVbds23Qgk");

$actions = ['login', 'register', 'forget'];

$messages = [
    0 => 'Közvetlen hozzáférés letagadva!',
    1 => 'Nem létezik a felhasználó!',
    2 => 'Felhasználónév foglalt!',
    3 => 'Sikeres regisztáció, aktiválja fiókját!',
    4 => 'Töltse ki az összes mezőt!',
    5 => 'Kijelentkezett!',
    6 => 'Fiókja sikeresen aktiválva lett!',
    7 => 'Nem egyezik a jelszava!',
    8 => 'Érvényetelen e-mail cím!',
    9 => 'Legalább 8 karakter hosszú legyen a jelszava!',
    10 => 'Valami hiba történt. Próbálja újra később!',
    11 => 'Fiókja már aktiválva van!'
];
