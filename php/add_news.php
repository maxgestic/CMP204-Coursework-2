<html lang="en">

<body>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        include('db.php');


        try {
            $dbh = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);

            $name = $email = "";

            $name = $_POST["name"];
            $email = $_POST["email"];

            $sql = "INSERT INTO Newsletter (name,email) VALUES (:name,:email)";
            $q = $dbh->prepare($sql);
            $q->execute(array(':name' => $name,
                ':email' => $email));

            $dbh = null;
        } catch (PDOException $e) { // if exception
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }

?>

</body>

</html>