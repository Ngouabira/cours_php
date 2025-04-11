
        <?php

        //Les informations de connexion à la base de données
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        //Récupération de l'id du produit à supprimer
        $id = $_GET['id'];

        //Requête SQL pour supprimer le produit
        $sql = "DELETE FROM produit WHERE id = $id";
        $pdo->query($sql);

        //Redirection vers la page index.php
        header("Location: /produit/index.php");
