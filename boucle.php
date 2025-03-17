<?php



/*
    for(initialisation; condition; incrémentation){
        Code à exécuter;
    }
     */

/*
     initialisation

    while(condition){     
        Code à exécuter;
        incrémentation;
    }
     */

/*
     initialisation
    do{
        Code à exécuter;
        incrémentation;
    }while(condition)
     */

//Ecris un exemple pour chaque type de boucle

//for
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

//while
$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}

//do while
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);
