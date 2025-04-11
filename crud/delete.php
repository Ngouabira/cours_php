
        <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_php";
        $conn = mysqli_connect($host, $username, $password, $dbname);
        $id = $_GET['id'];
        $sql = "DELETE FROM personne WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        header("Location: /crud/index.php");
