
        <?php

        //Les informations de connexion à la base de données
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        //Récupération de l'id de la personne à supprimer
        $id = $_GET['id'];

        //Requête SQL pour supprimer la personne
        $sql = "DELETE FROM personne WHERE id = $id";
        $pdo->query($sql);
        header("Location: /pdo/index.php");
