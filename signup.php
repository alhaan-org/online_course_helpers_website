<?php
session_start();

$_SESSION['superhero'] = @trim(stripslashes($_POST['name']));

$name = @trim(stripslashes($_POST['name']));
$email = @trim(stripslashes($_POST['email']));
$phone = @trim(stripslashes($_POST['phone']));
$service = @trim(stripslashes($_POST['service']));

$subject = 'New Signup Request - Online Course Helpers';

$email_from = $email;
$email_to = 'info@onlinecoursehelpers.com';

$body = "Name: $name\n\nEmail: $email\n\nPhone: $phone\n\nService: $service";

$success = @mail($email_to, $subject, $body, 'From: <' . $email_from . '>');

header("Location: thankyou-page");
die;
?>