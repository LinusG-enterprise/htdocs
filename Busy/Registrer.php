<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy</title>
</head>
<body>

<header><h1>Linus's godtebutikk
</header>

<h1>Registrer firmaet ditt: </h1>
<form action="Registrer.php" method="post">
  Firmanavn: <br><input type="text" name="firmanavn"><br>
  Organisasjonsnummer:<br> <input type="text" name="orgnr"><br>
  Forretningsadresse:<br> <input type="text" name="fradr"><br>
  Leveringsadresse:<br> <input type="text" name="levadr"><br>
  Postnummer: <input type="text" name="postnr">
  Poststed <input type="text" name="poststed"><br>
  <input type="radio"  name="levering" value="hentes">
  <label for="hentes">Kunde</label><br>
  <input type="radio"  name="levering" value="hentes">
  <label for="hentes">Levrandør</label><br>
  <input type="submit">
</form>


<H2>registrer en kontaktperson:</H2>
<form action="Registrer.php" method="post">
  Fornavn:<br> <input type="text" name="navn"><br>
  Etternavn:<br> <input type="text" name="etternavn"><br>
  Tittel:<br> <input type="text" name="title"><br>
  E-post: <br><input type="text" name="epost"><br>
  Telefonnummer:<br> <input type="text" name="tlf"><br>
  <input type="submit">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {


  //Firma
  $Firmanavn = $_POST["firmanavn"]; 

  $Orgnr = $_POST["orgnr"]; 

  $Forretningsadresse = $_POST["fradr"]; 

  $Leveringsadresse = $_POST["levadr"]; 

  $Postnummer = $_POST["postnr"]; 

  $Poststed = $_POST["poststed"]; 



//personer
  $Fornavn = $_POST["navn"]; 

  $Etternavn = $_POST["etternavn"];

  $Tlf = $_POST["tlf"];

  $Epost = $_POST["epost"];

  $Tittel = $_POST["title"];

  $connection = new mysqli("localhost","root","","busy");

    if ($connection -> connect_errno) {

      echo "Failed to connect to MySQL:" . $connection -> connect_error;

      exit();

    }
     

    //firma
    $sql = "INSERT INTO firma (`navn`, `organisasjonsnummer`, `adresse`, `leveringsadresse`, `postnummer`, `poststed`) 
    VALUES ('$Firmanavn',  '$Orgnr', '$Forretningsadresse', '$Leveringsadresse', '$Postnummer', '$Poststed')";
  
  if($connection -> query($sql) === TRUE) {
    echo ("velkommen som Firmakunde/leverandør i linus's godtebutikk $Firmanavn");
  } else {
    echo "FEIL!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
  }

  else if isset 
    //personer
    $sql = "INSERT INTO personer (`fornavn`, `etternavn`, `tittel`, `telefon`, `epost`) 
      VALUES ('$Fornavn',  '$Etternavn', '$Tittel', '$Tlf', '$Epost')";
    
    if($connection -> query($sql) === TRUE) {
      echo ("velkommen som medlem i linus's godtebutikk $Fornavn $Etternavn");
    } else {
      echo "FEIL!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
    }
    
}
?>
  <p><a href = "frontpage.php"> Ta meg tilbake til startsiden </a> </p>
</body>


</html>