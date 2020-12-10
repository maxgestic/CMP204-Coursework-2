<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avicii</title>

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

        <div class="row" id="header">

            <div class="col-lg-7 col-md-12 col-sm-12 col-xl-7">

                <div id="header-text">

                    <h1 style="font-family: Avicii,serif; font-size: 70px">Avicii</h1>

                    <h3>

                        Tim created music that brought people together with timeless memories from all over the world.<br>

                        <br>

                        We created this space so you could share your memories with all of us and let the world know what Avicii meant to you.<br>

                        <br>

                        His music and your memories are forever.

                    </h3>

                </div>

            </div>

            <div class="col-lg-5 d-none d-sm-none d-md-none d-lg-block">

                <img class="" id="avicii-1-img" src="img/avicii-1.png" alt="Picture of Avicii">

            </div>

        </div>

        <div class="container-fluid" id="spotify-cont">

            <h2 class="text-center" style="font-family: Avicii,serif; font-size: 70px">Top Songs</h2>

            <iframe src="https://open.spotify.com/embed/artist/1vCWHaC5f2uS3yhpwWbIA6" width="100%" height="400px" allowtransparency="true" allow="encrypted-media"></iframe>

        </div>

        <h2 class="text-center" style="font-family: Avicii,serif; font-size: 70px">Messages from Fans</h2>

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

                <div class="col-md-4">

                    <div class="jumbotron"></div>

                </div>

            </div>

            <p class="text-center"> To see more messages and/or to leave you're own message in tribute to Avicii please <a href="#">Click Here</a></p>

        </div>

        <div class="jumbotron" id="newsjumb">

            <h1>Subscribe to our Newsletter!</h1>

            <form id="form">

                <label>
                    <h3>Name:</h3><br>
                    <input class="newsinput" type="text" name="name" id="name">
                </label> <br><br>

                <label>
                    <h3>E-Mail:</h3><br>
                    <input class="newsinput" type="text" name="email" id="email">
                </label> <br><br>

                <input class="newsinput" name="submit" type="submit" value="Submit">

            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/add_news.js"></script>



</body>
</html>