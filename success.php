<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avicii</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">


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

                <hr>

                <div class="badge-pill" id="success" style="background-color: greenyellow; color: black">

                    <p>Your Message has been sent!</p>

                </div>

            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>