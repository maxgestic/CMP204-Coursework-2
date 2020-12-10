<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/3.1.0/cookie-consent.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({"notice_banner_type":"interstitial","consent_type":"express","palette":"dark","language":"en","website_name":"Avicii","change_preferences_selector":"#changePreferences"});
        });
    </script>

    <noscript>Cookie Consent by <a href="https://www.FreePrivacyPolicy.com/free-cookie-consent/" rel="nofollow noopener">FreePrivacyPolicy.com</a></noscript>
    <!-- End Cookie Consent -->


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

    <div>

        <form action="php/delete.php" method="POST" class="float-left" style="padding-right: 5px">
            <a href="#" onclick="this.parentNode.submit()">

                <div class="btn btn-danger">Delete Account!</div>

            </a>
        </form>

        <a href="change_passwd.php">

            <div class="btn btn-info">Change Password</div>

        </a>

    </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/add_news.js"></script>



</body>
</html>