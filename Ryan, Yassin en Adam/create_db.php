<?php

// Met deze gegevens kunnen we inloggen op de mysql-server en een database selecteren
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detective_opleiding";

// Met deze functiemaken we contact met de mysql-server
$conn = mysqli_connect($servername, $username ,$password ,$dbname);
?>

