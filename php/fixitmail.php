<?php
$name = $_POST['name'];
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$message = $_POST['issue'];
$place = $_POST['maintOptions'];
$time = $_POST['time'];
$room = $_POST['room'];
$formcontent ="<html>
                <p><b>From:</b> $name</p>
                <p><b>Building:</b> $place</p>
                <p><b>Room #:</b> $room</p>
                <p><b>Maintenance Issue:</b> $message</p>
                <p><b>Preferred Time:</b> $time</p>
                </html>";
$recipient = "brian@moneykatz.com";
$recipient2 = $_POST['email'];
$subject = "ASK Maintenance Request";
$mailheader = "From: $email \r\n";
$mailheader .= 'MIME-Version: 1.0' . "\r\n";
$mailheader .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Son of a biscuit, something went wrong!");
mail($recipient2, $subject, $formcontent, $mailheader) or die("Son of a biscuit, something went wrong!");
echo '<html>
    <head>
    <!-- The line below redirects from the generated page after the number of seconds specified, and to the url listed -->
        <meta http-equiv="refresh" content="10;url=http://www.moneykatz.com/" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Maintenance Request Confirmation</title>

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
echo "<h1>You have submitted the following information: </h1><br />";
echo "<p>From: $name</p>";
echo "<p>School or Apt: $place </p>";
echo "<p>Room #: $room </p>";
echo "<p>Maintenance Issue:  $message </p>";
echo "<p>Preferred Time: $time</p></br />";
echo "<h3>Redirecting in 10 seconds...</h3>";
echo '</div></body></html>';
?>