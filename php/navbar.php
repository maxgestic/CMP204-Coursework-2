<?php

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){

    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

        <a class="navbar-brand" id="navbar-name" href="index.php">Avicii</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto navbar-center" id="navbar-links">

                <li
                    <?php

                    if($_SERVER['PHP_SELF']=="/index.php") {

                        ?>

                        class="nav-item active"

                        <?php

                    }
                    else{

                        ?>

                        class="nav-item"

                        <?php

                    }

                    ?>>

                    <a class="nav-link" href="index">Home</a>

                </li>

                <li
                    <?php

                    if($_SERVER['SCRIPT_NAME']=="/about.php") {

                        ?>

                        class="nav-item active"

                        <?php

                    }
                    else{

                        ?>

                        class="nav-item"

                        <?php

                    }

                    ?>>

                    <a class="nav-link" href="/about">About</a>

                </li>

                <li
                    <?php

                    if($_SERVER['SCRIPT_NAME']=="/contact.php") {

                        ?>

                        class="nav-item active"

                        <?php

                    }
                    else{

                        ?>

                        class="nav-item"

                        <?php

                    }

                    ?>>

                    <a class="nav-link" href="contact">Contact</a>

                </li>

            </ul>

            <ul class="navbar-nav navbar-right">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-md-left dropdown-menu-sm-left dropdown-menu-left" aria-labelledby="navbarDropdown">

                        <p style="padding-left: 7px;padding-right: 7px;"><?php echo htmlspecialchars($_SESSION["fn"]." ".$_SESSION["ln"]); ?></p>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="settings">Settings</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="php/logout.php">Logout</a>

                    </div>

                </li>

            </ul>

        </div>

    </nav>

    <?php

}
else {

    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">


        <a class="navbar-brand" id="navbar-name" href="index.php">Avicii</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto navbar-center" id="navbar-links">

                <li

                    <?php

                    if($_SERVER['PHP_SELF']=="/index.php") {

                        ?>

                        class="nav-item active"

                        <?php

                    }else{

                        ?>

                        class="nav-item"

                        <?php

                    }

                    ?>>

                    <a class="nav-link" href="index.php">Home</a>

                </li>

                <li
                    <?php

                    if($_SERVER['SCRIPT_NAME']=="/about.php") {

                        ?>

                        class="nav-item active"

                        <?php

                    }
                    else{

                        ?>

                        class="nav-item"

                        <?php

                    }

                    ?>>

                    <a class="nav-link" href="about.php">About</a>

                </li>

                <li
                    <?php

                    if($_SERVER['SCRIPT_NAME']=="/contact.php") {

                        ?>

                        class="nav-item active"

                        <?php

                    }
                    else{

                        ?>

                        class="nav-item"

                        <?php

                    }

                    ?>>

                    <a class="nav-link" href="contact.php">Home</a>

                </li>

            </ul>

            <ul class="navbar-nav navbar-right">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-md-left dropdown-menu-sm-left dropdown-menu-left" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item loginLink" href="login.php">Login</a>

                        <a class="dropdown-item regLink" href="register.php">Register</a>

                    </div>

                </li>

            </ul>

        </div>

    </nav>

    <?php
}