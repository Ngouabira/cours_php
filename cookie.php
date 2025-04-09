<?php

//Pour créer un cookie, on utilise la fonction setcookie()
//Avec les paramètres :
//1. Le nom du cookie
//2. La valeur du cookie
//3. Le temps d'expiration du cookie
//4. Le chemin sur le serveur
//5. Le domaine
//6. Indique si le cookie doit être transmis uniquement via HTTPS

setcookie('name', 'John', time() + 3600);
setcookie('age', '20', time() + 3600);


if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

if (isset($_COOKIE['age'])) {
    echo $_COOKIE['age'];
}
