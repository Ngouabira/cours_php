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
        <h1 class="text-center">Modifier une personne</h1>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $conn = mysqli_connect($host, $username, $password, $dbname);

        $id = $_GET['id'];
        $sql = "SELECT * FROM personne WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $person = mysqli_fetch_assoc($result);

        $message = "";

        if (isset($_POST['modifier'])) {
            $nom = $_POST['nom'];
            $genre = $_POST['genre'];
            $date_naissance = $_POST['date_naissance'];

            $sql = "UPDATE personne SET nom = '$nom', genre = '$genre', date_naissance = '$date_naissance' WHERE id = $id";
            mysqli_query($conn, $sql);
            header("Location: /crud/index.php");
        }

        ?>
        <?php if ($message != ""): ?>
            <div class="alert alert-success d-flex justify-content-center">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <a href="/crud/index.php" class="btn btn-primary">Retourner à la liste</a>
        <form action="edit.php?id=<?= $id; ?>" method="post" class="mt-3">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input value="<?= $person['nom']; ?>" required type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select required class="form-control" id="genre" name="genre">
                    <option <?= $person['genre'] == 'M' ? 'selected' : ''; ?> value="M">Masculin</option>
                    <option <?= $person['genre'] == 'F' ? 'selected' : ''; ?> value="F">Féminin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance</label>
                <input value="<?= $person['date_naissance']; ?>" required type="date" class="form-control" id="date_naissance" name="date_naissance">
            </div>
            <button name="modifier" type="submit" class="btn btn-success mt-3">Modifier</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>