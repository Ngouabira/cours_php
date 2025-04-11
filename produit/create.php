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
        <h1 class="text-center">Ajouter un produit</h1>
        <?php
        //Les informations de connexion à la base de données
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        //Message de succès
        $message = "";

        //Si le formulaire est soumis
        if (isset($_POST['enregister'])) {
            $libelle = $_POST['libelle'];
            $prix = $_POST['prix'];
            $photo = $_FILES['photo']['name'];
            $photo_tmp = $_FILES['photo']['tmp_name'];

            $sql = "INSERT INTO produit (libelle, prix, photo) VALUES ('$libelle', '$prix', '$photo')";
            $pdo->query($sql);

            //Déplacement de la photo dans le dossier images
            move_uploaded_file($photo_tmp, "images/" . $photo);

            //Message de succès
            $message = "Produit enregistré avec succès";
        }

        ?>
        <?php if ($message != ""): ?>
            <div class="alert alert-success d-flex justify-content-center">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Retour à la liste des produits -->
        <a href="/produit/index.php" class="btn btn-primary">Retourner à la liste</a>

        <!-- Formulaire pour ajouter un produit -->
        <form action="create.php" method="post" class="mt-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="libelle">Libellé</label>
                <input required type="text" class="form-control" id="libelle" name="libelle">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input required type="number" class="form-control" id="prix" name="prix">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input accept="image/*" required type="file" class="form-control" id="photo" name="photo">
            </div>
            <button name="enregister" type="submit" class="btn btn-success mt-3">Enregister</button>
        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>