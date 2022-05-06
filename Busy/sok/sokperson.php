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

<form action="sokperson.php" method="post">
Fornavn: <input type="text" name="navn" ><br>
Etternavn: <input type="text" name="etternavn"><br>
<input type="submit">

<?php
if(isset($_POST["navn"], $_POST["etternavn"])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "busy";
$fornavn = $_POST["navn"];
$etternavn = $_POST["etternavn"];


$conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection

  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT * from personer where fornavn like '%$fornavn%' and etternavn like '%$etternavn%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    echo "id: " . $row["id"] . "<br>" . " - fornavn: " . $row["fornavn"] . "<br>" . " - etternavn: " . $row["etternavn"] . "<br>" . " - telefon: " . $row["telefon"] . "<br>" . " - epost: " . $row["epost"] . "<br>";
  }
} 
else {
  echo "0 results";
}
  $conn->close();


}
else {
    echo "Fyll ut feltene";
}
?>
 <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> 
<p><a href = "../frontpage.php"> Ta meg tilbake til startsiden </a> </p>