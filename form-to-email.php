<?php
if(!isset($_POST['submit']))
{
    //This page should not be accessed directly. Need to submit the form.
    echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name) ||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}
$email_from='shara.a.belton@gmail.com';//<== this is my email
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name. \n". "email address: $visitor_email\n". "Here is the message:\n $message".

$to = "shara.a.belton@gmail.com";// my email again hehehe
$headers = "From:$email_from \r\n";

//Send email!
mail($to,$email_subject,$email_body,$headers);
//done.