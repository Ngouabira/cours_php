<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Produit | PHP</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Liste des produits</h1>
        <?php
        //Les informations de connexion à la base de données
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        //Requête SQL pour récupérer tous les produits
        $sql = "SELECT * FROM produit";
        $result = $pdo->query($sql);
        ?>
        <a href="/produit/create.php" class="btn btn-primary">Ajouter un produit</a>
        <table class="table table-striped mt-3">
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            <!-- Affichage des produits -->
            <?php while ($row = $result->fetch()): ?>
                <tr>
                    <td><?php echo $row['libelle']; ?></td>
                    <td><?php echo $row['prix']; ?></td>
                    <td><img src="./images/<?php echo $row['photo']; ?>" alt="Photo du produit" style="width: 100px; height: 100px;"></td>
                    <td>
                        <a href="/produit/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Modifier</a>
                        <a href="/produit/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>

</html>