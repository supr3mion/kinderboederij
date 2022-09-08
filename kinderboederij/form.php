<?php

$servername = "localhost";
$username = "deb85590_groep2kinderboerderij";
$password = "rspg1s6fqf";
$dbname = "deb85590_groep2kinderboerderij";
$message = "false";
$return = "flase";

$connection = mysqli_connect($servername, $username, $password, $dbname);

$query = "INSERT INTO `berichten`(`first_name`, `last_name`, `email`, `bericht`)
VALUES ('".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["email"]."', '".$_POST["bericht"]."')";

if (mysqli_query($connection, $query)) {
    $message = "true";
}

if ($message == "true") {
    header('location: contact-send.html');
}

else{
    header('location: contact-fail.html');
}

?>