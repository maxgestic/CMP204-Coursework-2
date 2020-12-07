<?php

//THESE ARE IF YOU DO NOT USE A SEPARATE CONFIG FILE FOR PHP LOGINS
//define('DB_SERVER', '');
//define('DB_USERNAME', '');
//define('DB_PASSWORD', '');
//define('DB_NAME', '');

require_once "db.php";

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

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

        mysqli_stmt_bind_param($stmt, "s", $param_id);

        $param_id = $id;

        if(mysqli_stmt_execute($stmt)){

            mysqli_stmt_store_result($stmt);

            $_SESSION = array();

            session_destroy();

            header("location: ../index.php");

            exit;

        }
        else{

            echo "Oops! Something went wrong. Please try again later.";

        }

        mysqli_stmt_close($stmt);

    }

}