<?php

//Une fonction est un bloc de code qui peut être appelé plusieurs fois dans le programme.
//Elle peut recevoir des paramètres et retourner une valeur.
//Elle est définie avec le mot clé function.

function direBonjour()
{
    echo "Bonjour ";
}

function direBonjour2($name)
{
    echo "Bonjour " . $name . "<br>";
}


function somme($nb1, $nb2)
{
    return $nb1 + $nb2;
}

echo somme(10, 20);
