<?php

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if (empty($nom) || empty($prenom)) {

        echo '<p class="text-danger">Veuillez remplir tous les champs </p>';
    } else {

        echo "Bonjour " . $nom . " " . $prenom;
    }
}
