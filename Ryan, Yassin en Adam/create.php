<?php

include("./connect_db.php");
include("./functions.php");

  $Voornaam = sanitize($_POST["Voornaam"]);
  $Tussenvoegsel = sanitize($_POST["Tussenvoegsel"]);
  $Achternaam = sanitize($_POST["Achternaam"]);
  $Geboortedatum = sanitize($_POST["Geboorte datum"]);
  $Email = sanitize($_POST["Email"]);
  $Telefoonnummer = sanitize($_POST["Telefoonnummer"]);


// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT `inschrijfformulieren` 
(`Voornaam`, `Tussenvoegsel`, `Achternaam`, `Geboorte datum`, `Email`, `Telefoonnummer`) 
VALUES ('$Voornaam', '$Tussenvoegsel', '$Lastname', '$Geboortedatum', '$Email', '$Telefoonnummer')"; 

// Dit is de funcit edie de query $sql via de verbinding $conn naar de database stuurt.
mysqli_query($conn, $sql);

header("Location: ./read.php");

?>