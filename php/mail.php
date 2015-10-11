<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "brian@moneykatz.com";
$subject = "Moneykatz Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

/**
 * Created by PhpStorm.
 * User: brianthomas
 * Date: 10/11/15
 * Time: 6:19 PM
 */