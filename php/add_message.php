<html lang="en">

<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }

    include('db.php');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $dbh = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);

    $message = $_POST["message"];

    $sql = "INSERT INTO messages (user_id,message) VALUES (?, ?)";

    if($stmt = mysqli_prepare($link, $sql)){

        mysqli_stmt_bind_param($stmt, "is", $parm_id, $parm_message);

        $parm_id = $_SESSION['id'];
        $parm_message = $message;

        if(mysqli_stmt_execute($stmt)){

            echo "Done";

        }
        else{

            echo "Something went wrong. 1 Please try again later.";

        }

        mysqli_stmt_close($stmt);

    }

}

?>

</body>

</html>