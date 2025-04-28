<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php
    require 'navbar.php';
    ?>

    <?php

    if (isset($_GET['submit'])) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];

        if (empty($nom) || empty($prenom)) {

            echo '<p class="text-danger">Veuillez remplir tous les champs </p>';
        } else {

            echo "Bonjour " . $nom . " " . $prenom;
        }
    }

    ?>



    <form action="formulaire.php" method="GET">


        <div class="col-lg-6 offset-lg-3">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom">
        </div>

        <div class="col-lg-6 offset-lg-3">
            <label for="prenom">Prenom</label>
            <input class="form-control" type="text" name="prenom" id="prenom">
        </div>

        <center><button class="btn btn-primary mt-3" name="submit" type="submit">Envoyer</button></center>



    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>