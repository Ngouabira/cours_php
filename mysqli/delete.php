
        <?php

        //Les informations de connexion à la base de données
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $conn = mysqli_connect($host, $username, $password, $dbname);

        //Récupération de l'id de la personne à supprimer
        $id = $_GET['id'];

        //Requête SQL pour supprimer la personne
        $sql = "DELETE FROM personne WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        //Redirection vers la page index.php
        header("Location: /crud/index.php");
