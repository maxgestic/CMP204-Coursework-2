<?php

//THESE ARE IF YOU DO NOT USE A SEPARATE CONFIG FILE FOR PHP LOGINS
//define('DB_SERVER', '');
//define('DB_USERNAME', '');
//define('DB_PASSWORD', '');
//define('DB_NAME', '');

require_once "php/db.php";

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$email = $password = $confirm_password = $fn = $ln = "";
$email_err = $password_err = $confirm_password_err  = $fn_err = $ln_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["fn"]))){

        $fn_err = "Please enter a Firstname";

    }
    else{

        $fn = trim($_POST["fn"]);

    }

    if(empty(trim($_POST["ln"]))){

        $ln_err = "Please enter a Firstname";

    }
    else{

        $ln = trim($_POST["ln"]);

    }

    if(empty(trim($_POST["email"]))){

        $email_err = "Please enter a email.";

    }
    else{

        $sql = "SELECT id FROM users WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = trim($_POST["email"]);

            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){

                    $email_err = "This email is already taken.";

                } else{

                    $email = trim($_POST["email"]);

                }

            } else{

                echo "Oops! Something went wrong. Please try again later.";

            }

            mysqli_stmt_close($stmt);

        }

    }

    if(empty(trim($_POST["password"]))){

        $password_err = "Please enter a password.";

    }
    elseif(strlen(trim($_POST["password"])) < 8){

        $password_err = "Password must have at least 8 characters.";

    }
    else{

        $password = trim($_POST["password"]);

    }

    if(empty(trim($_POST["confirm_password"]))){

        $confirm_password_err = "Please confirm password.";

    }
    else{

        $confirm_password = trim($_POST["confirm_password"]);

        if(empty($password_err) && ($password != $confirm_password)){

            $confirm_password_err = "Password did not match.";

        }

    }

    if(empty($fn_err) && empty($ln_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "ssss", $parm_fn, $parm_ln, $param_email, $param_password);

            $parm_fn = $fn;
            $parm_ln = $ln;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if(mysqli_stmt_execute($stmt)){

                header("location: login.php");

            }
            else{

                echo "Something went wrong. 1 Please try again later.";

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

    <title>Sign Up</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; background-color: white; color: black; border-radius: 10px}
        .help-block{color: red;}
    </style>

</head>

<body>

<?php
session_start();
include('php/navbar.php')
?>

<div class="container" id="page-cont">

    <div class="wrapper mx-auto">

        <h2>Sign Up</h2>

        <p>Please fill this form to create an account.</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($fn_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="fn" class="form-control" value="<?php echo $fn; ?>">
                <span class="help-block"><?php echo $fn_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($ln_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="ln" class="form-control" value="<?php echo $ln; ?>">
                <span class="help-block"><?php echo $ln_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>

        </form>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>