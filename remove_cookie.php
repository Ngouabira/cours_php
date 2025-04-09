<?php 

//Pour supprimer un cookie, on utilise la fonction setcookie()
//Avec les paramètres :
//1. Le nom du cookie
//2. La valeur du cookie

setcookie('name', 'John', time() - 3600);
setcookie('age', '20', time() - 3600);






?>