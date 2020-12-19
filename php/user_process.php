<?php

include("dbconnect.php");

$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//inserting data to table

$query=mysqli_query($db_connect,"INSERT INTO user(name,subject,email,message) VALUES('$name','$subject','$email','$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

header("location:contact.php?note=success");

?>
