
        <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $id = $_GET['id'];
        $sql = "DELETE FROM personne WHERE id = $id";
        $pdo->query($sql);
        header("Location: /pdo/index.php");
