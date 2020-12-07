<html lang="en">

    <body>

    <?php

        $name = $email = $tel = $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = input($_POST["name"]);
            $email = input($_POST["email"]);
            $tel = input($_POST["tel"]);
            $message = input($_POST["message"]);

            send_mail($name, $email, $tel, $message);

            header("Location: ../success.php");

        }

        function input($data){

            $data = trim($data);

            $data = stripslashes($data);

            $data= nl2br(htmlspecialchars($data));

            return $data;

        }

        function send_mail($name, $email, $tel, $message){

            $to = $email;
            $subject = "Contact Form Email sent by $name";
            $message = "

            <html lang='en'>
            
                <head>
                
                    <title>HTML email</title>
                    
                </head>
                
                <body style='background-color: black; color: white; padding: 5px'>
            
                    <p>
                    
                    This is a message sent by $name<br>
                    <br>
                    Their Phone Number is: $tel<br>
                    <br>
                    Their E-Mail Address is: $email<br>
                    <br>
                    Their Message is: <br>
                    <div style='border-radius: 10px; color: black; background-color: white; padding: 20px; margin: 5px;'>
                        $message
                    </div>
                    <br>
                    <br>
                    <br>
                    This email was sent by an automated contact forum
                    
                    </p>
           
                </body>
            </html>
            ";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: notreal@avicii.com' . "\r\n";

            mail($to,$subject,$message,$headers);

        }

    ?>

    </body>

</html>