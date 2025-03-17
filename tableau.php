<?php 

$countries = ["Sénégal", "Gambie", "Benin", "Togo"];

//Afficher le premier élément du tableau
echo $countries[0] . "<br>";

//Afficher le dernier élément du tableau
echo $countries[count($countries) - 1] . "<br>";

//Afficher tous les éléments du tableau
foreach ($countries as $key => $country) {
    echo $key . " : " . $country . "<br>";
}

//Ajouter un élément au tableau
$countries[] = "Burkina Faso";

//Modifier un élément du tableau
$countries[0] = "Guinée Conakry";

//Supprimer un élément du tableau
unset($countries[0]);

//Afficher le nombre d'éléments du tableau
echo count($countries) . "<br>";

//Afficher le tableau
print_r($countries);


?>