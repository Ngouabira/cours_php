<?php


/*
    if (condition) {
    Code à exécuter si la condition est vraie
       }
    else {
     Code à exécuter si la condition est fausse
    }
     */

/*
    if (condition1) {
         Code à exécuter si condition1 est vraie
        }
    else if (condition2) {
       Code à exécuter si condition2 est vraie
       }
    else {
     Code à exécuter si aucune condition n'est vraie
    }
     */


//Fais un exmple
$age = 18;

if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}

//Fais un exmple avec un else if
$age = 15;

if ($age >= 18) {
    echo "Vous êtes majeur";
} elseif ($age >= 13) {
    echo "<h1 style='color: orange;'>Vous êtes adolescent</h1>";
} else {
    echo "Vous êtes mineur";
}


/*    switch (variable) {
                case valeur1:
                      Code à exécuter si la variable est égale à valeur1
                    break;
                 case valeur2:
                      Code à exécuter si la variable est égale à valeur2
                     break;
                 default:
                      Code à exécuter si la variable n'est pas égale à valeur1 ou valeur2
                     break;
             }
            */

//Fais un exmple pour le switch    
$gender = "homme";

switch ($gender) {
    case "homme":
        echo "Vous êtes un homme";
        break;
    case "femme":
        echo "Vous êtes une femme";
        break;
    default:
        echo "Vous êtes un autre genre";
}
