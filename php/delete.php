<?php
// Include config file
require_once "db.php";


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$param_id = $id = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    session_start();

    $id = trim($_SESSION["id"]);

    print('id is'.$id);

    $sql = "DELETE FROM users WHERE id = ?";

    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_id);

        $param_id = $id;



        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            $_SESSION = array();
            session_destroy();
            header("location: ../index.php");
            exit;

        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

}