<?php

//r: ouverture en lecture seule
$fichier = fopen("monfichier.txt", "r");

while (!feof($fichier)) {
    echo fgets($fichier);
    echo "<br>";
}

$monfichier = file("monfichier.txt");
foreach ($monfichier as $ligne) {
    echo $ligne;
    echo "<br>";
}

echo file_get_contents("monfichier.txt");

//r+: ouverture en lecture et écriture
$fichier = fopen("monfichier.txt", "r+");
fwrite($fichier, "Bonne nuit");
while (!feof($fichier)) {
    echo fgets($fichier);
    echo "<br>";
}

fclose($fichier);

//w: ouverture en écriture
$fichier = fopen("monfichier.txt", "w");
fwrite($fichier, "Bonne nuit");
fclose($fichier);

//a: ouverture en écriture et ajout
$fichier = fopen("monfichier.txt", "a");
fwrite($fichier, "Bonne nuit");
fclose($fichier);

//x: ouverture en écriture et création
$fichier = fopen("monfichier.txt", "x");
fwrite($fichier, "Bonne nuit");
fclose($fichier);
