<html lang="en">

<body>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        include('db.php');


        try {
            $dbh = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);

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