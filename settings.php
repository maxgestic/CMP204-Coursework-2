<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">




</head>
<body>


<?php
session_start();

include('php/navbar.php')
?>

<div class="container-fluid" id="page-cont">

    <h1>Details:</h1>
    <hr>
    <h2>First Name:</h2>
    <?php echo htmlspecialchars($_SESSION["fn"]); ?>
    <h2>Last Name:</h2>
    <?php echo htmlspecialchars($_SESSION["ln"]); ?>
    <h2>Email:</h2>
    <?php echo htmlspecialchars($_SESSION["email"]); ?>

    <hr>

    <form action="php/delete.php" method="POST">
        <a href="#" onclick="this.parentNode.submit()">

            <div class="btn btn-danger">Delete Account!</div>

        </a>
    </form>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/add_news.js"></script>



</body>
</html>