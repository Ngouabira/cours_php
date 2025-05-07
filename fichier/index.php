<?php

//Ecris le cous complet avec des exemples sur la manipulation des fichiers avec "monfichier.txt"

//1. Créer un fichier
$fichier = fopen("monfichier.txt", "w");

//2. Ecrire dans le fichier
fwrite($fichier, "Hello World");

//3. Fermer le fichier
fclose($fichier);

//4. Afficher le contenu du fichier
echo file_get_contents("monfichier.txt");

//5. Ajouter du contenu dans le fichier
file_put_contents("monfichier.txt", "Hello World", FILE_APPEND);

//6. Lire le contenu du fichier
echo file_get_contents("monfichier.txt");

//7. Supprimer le fichier
unlink("monfichier.txt");

//8. Vérifier si le fichier existe
if (file_exists("monfichier.txt")) {
    echo "Le fichier existe";
} else {
    echo "Le fichier n'existe pas";
}

//9. Lire le contenu du fichier
echo file_get_contents("monfichier.txt");

//10. Lire le contenu du fichier en une seule ligne
echo file_get_contents("monfichier.txt");

//Parcourir le contenu du fichier
$contenu = file("monfichier.txt");
foreach ($contenu as $ligne) {
    echo $ligne;
}
