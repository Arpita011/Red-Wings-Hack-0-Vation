<?php
include 'connect.php';
$name = $_POST['name'];
$name = mysqli_real_escape_string($con , $name);
$email = $_POST['email'];
$email = mysqli_real_escape_string($con , $email);
$subject = $_POST['subject'];
$subject = mysqli_real_escape_string($con , $subject);
$message = $_POST['message'];
$message = mysqli_real_escape_string($con , $message);

$insert_query="INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
$query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:index.php');
?>