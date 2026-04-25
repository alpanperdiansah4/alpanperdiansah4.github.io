<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mysqli_query($conn,"INSERT INTO messages(name,email,message)
VALUES('$name','$email','$message')");

header("Location: contact.php?status=ok&nama=$name&email=$email&pesan=$message");
exit;

}
?>