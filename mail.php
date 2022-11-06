<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n"

$recipient = "kayodeolamilakan2019@gmail.com";

mail($recipient, "", $message, $mailheader)
or die("Error Sending Message!");

echo"Message Sent Successfully";
?>