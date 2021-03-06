<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avicii</title>

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


</head>
<body>

    <?php
    session_start();

    include('php/navbar.php')
    ?>

    <div class="container-fluid" id="page-cont">

        <div class="jumbotron text-center">

            <h1>Contact Form</h1>

            <hr>

            <form method="post" action="php/contact.php">

                <label>
                    Name:<br>
                    <input type="text" name="name">
                </label> <br><br>

                <label>
                    E-Mail:<br>
                    <input type="text" name="email">
                </label> <br><br>

                <label>
                    Phone Number:<br>
                    <input type="text" name="tel">
                </label> <br><br>

                <label>
                    Message:<br>
                    <textarea name="message" rows="10" cols="100"></textarea>

                </label><br><br>

                <input type="submit" name="submit" value="Submit">

            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>