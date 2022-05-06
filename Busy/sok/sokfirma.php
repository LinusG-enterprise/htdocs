<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sok</title>
</head>
<body>
<header><h1>Linus's godtebutikk</h1>
</header>
<h1>Søk etter en person eller et firma</h1>

<form action="sokfirma.php" method="post">
Firmanavn: <input type="text" name="firmanavn" ><br> 
<input type="submit">

<?php

if(isset($_POST["firmanavn"])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "busy";
$navn = $_POST["firmanavn"]; 

 
   // Create connection
 
   $conn = new mysqli($servername, $username, $password, $dbname);
 
   // Check connection
 
   if ($conn->connect_error) {
 
     die("Connection failed: " . $conn->connect_error);
 
 }
 
 $sql = "SELECT * from firma where `navn`like '%$navn%'";
 
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
 
   // output data of each row
 
   while($row = $result->fetch_assoc()) {
 
     echo "id: " . $row["id"] . "<br>" . " - navn: " . $row["navn"] . "<br>" . " - adresse: " . $row["adresse"] . "<br>" . " - organisasjonsnummer: " . $row["organisasjonsnummer"] . "<br>" . " - leveringsadresse: " . $row["leveringsadresse"] . "<br>" . "- postnummer" . $row["postnummer"]."<br>". " - poststed: " . $row["poststed"] . "<br>";
 
   }
 
 } else {
 
   echo "0 results";
 
 
 
 
 
   $conn->close();
 
 }
}
 






?>
 <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> 
<p><a href = "../frontpage.php"> Ta meg tilbake til startsiden </a> </p>