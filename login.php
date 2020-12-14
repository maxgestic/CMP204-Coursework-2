<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

//THESE ARE IF YOU DO NOT USE A SEPARATE CONFIG FILE FOR PHP LOGINS
//define('DB_SERVER', '');
//define('DB_USERNAME', '');
//define('DB_PASSWORD', '');
//define('DB_NAME', '');

require_once "php/db.php";

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$email = $password = $email_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["email"]))) {

        $email_err = "Please enter email.";

    } else {

        $email = trim($_POST["email"]);

    }

    if (empty(trim($_POST["password"]))) {

        $password_err = "Please enter your password.";

    } else {

        $password = trim($_POST["password"]);

    }

    if (empty($email_err) && empty($password_err)) {

        $sql = "SELECT id, firstname, lastname, email, password FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {

                    mysqli_stmt_bind_result($stmt, $id, $fn, $ln, $email, $hashed_password);

                    if (mysqli_stmt_fetch($stmt)) {

                        if (password_verify($password, $hashed_password)) {

                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["fn"] = $fn;
                            $_SESSION["ln"] = $ln;

                            header("location: index.php");

                        } else {

                            $password_err = "The password you entered was not valid.";

                        }

                    }

                } else {

                    $email_err = "No account found with that email.";

                }

            } else {

                echo "Oops! Something went wrong. Please try again later.";

            }

            mysqli_stmt_close($stmt);

        }

    }

    mysqli_close($link);

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript" src="js/cookie-consent.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({"notice_banner_type":"interstitial","consent_type":"express","palette":"dark","language":"en","website_name":"Avicii","change_preferences_selector":"#changePreferences"});
        });
    </script>

    <noscript>Cookie Consent by <a href="https://www.FreePrivacyPolicy.com/free-cookie-consent/" rel="nofollow noopener">FreePrivacyPolicy.com</a></noscript>
    <!-- End Cookie Consent -->
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
            background-color: white;
            color: black;
            border-radius: 10px
        }

        .help-block {
            color: red;
        }
    </style>
</head>

<body>

<?php
session_start();
include('php/navbar.php')
?>

<div class="container" id="page-cont">

    <div class="wrapper mx-auto">

        <h2>Login</h2>

        <p>Please fill in your credentials to login.</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>

        </form>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>