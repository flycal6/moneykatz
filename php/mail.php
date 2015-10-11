<?php
$name = $_POST['name'];
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "brian@moneykatz.com";
$subject = "Moneykatz Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Son of a biscuit, something went wrong!");
echo '<html>
    <head>
        <meta http-equiv="refresh" content="4;url=http://www.moneykatz.com/" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style type="text/css">
        body {
            background-color: #f0f0f2;
            margin: 0;
            padding: 0;
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;

        }
        div {
            width: 600px;
            margin: 5em auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 1em;
        }
        a:link, a:visited {
            color: #38488f;
            text-decoration: none;
        }
        @media (max-width: 700px) {
            body {
                background-color: #fff;
            }
            div {
                width: auto;
                margin: 0 auto;
                border-radius: 0;
                padding: 1em;
            }
        }
        </style>
    </head>
    <body>
    <div>';
    echo "<h1>Thank you for the message: </h1><br>";
    echo "Name: $name <br>
     Email:  $email <br>
     Message: $message";
    echo '</div></body></html>';
?>