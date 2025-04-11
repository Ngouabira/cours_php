<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>CRUD | PHP</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Liste des personnes</h1>
        <?php
        //Les informations de connexion à la base de données
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        //Requête SQL pour récupérer toutes les personnes
        $sql = "SELECT * FROM personne";
        $result = $pdo->query($sql);
        ?>
        <a href="/pdo/create.php" class="btn btn-primary">Ajouter une personne</a>
        <table class="table table-striped mt-3">
            <tr>
                <th>Nom</th>
                <th>Genre</th>
                <th>Date de naissance</th>
                <th>Action</th>
            </tr>
            <!-- Affichage des personnes -->
            <?php while ($row = $result->fetch()): ?>
                <tr>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['genre']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row['date_naissance'])); ?></td>
                    <td>
                        <!-- Lien pour modifier une personne -->
                        <a href="/pdo/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Modifier</a>
                        <!-- Lien pour supprimer une personne -->
                        <a href="/pdo/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>

</html>