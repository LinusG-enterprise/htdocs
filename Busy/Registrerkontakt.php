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

<a href = "Registrerfirma.php" > 
<h3>Firma<h3>
</a>

<a href = "Registrerkontakt.php" > 
<h3>Kontaktperson<h3>
</a>




<H2>registrer en kontaktperson:</H2>
<form action="Registrerkontakt.php" method="post">
  Fornavn:<br> <input type="text" name="navn"><br>
  Etternavn:<br> <input type="text" name="etternavn"><br>
  Tittel:<br> <input type="text" name="title"><br>
  E-post: <br><input type="text" name="epost"><br>
  Telefonnummer:<br> <input type="text" name="tlf"><br>
  Firma <select name="firmaid">
    <option value="0">Velg firma</option>
    <?php
      $connection = new mysqli("localhost","root","","busy");

      if ($connection -> connect_errno) {
        echo "Failed to connect to MySQL:" . $connection -> connect_error;
        exit();
      }

      $res = $connection->query("SELECT id, navn FROM `firma`");
      if($res->num_rows > 0) {

        while($row = $res->fetch_assoc()) {

          echo "<option value='" . $row["id"] . "'>" . $row["navn"] . "</option>";

        }

      }
    ?>
  </select>
  <br><input type="submit">
</form>

<?php
  if (isset($_POST["navn"]) && isset($_POST["etternavn"]) && isset($_POST["tlf"]) && isset($_POST["epost"]) && isset($_POST["title"]) && isset($_POST["firmaid"])){


//personer
  $Fornavn = $_POST["navn"]; 
  $Etternavn = $_POST["etternavn"];
  $Tlf = $_POST["tlf"];
  $Epost = $_POST["epost"];
  $Tittel = $_POST["title"];
  $FirmaID = $_POST["firmaid"];

    //personer
    $sql = "INSERT INTO personer (`fornavn`, `etternavn`, `tittel`, `telefon`, `epost`,`firma_id`) 
      VALUES ('$Fornavn',  '$Etternavn', '$Tittel', '$Tlf', '$Epost', '$FirmaID')";
    
    if($connection -> query($sql) === TRUE) {
      echo ("velkommen som medlem i Linus's godtebutikk $Fornavn $Etternavn");
    } else {
      echo "FEIL!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
    }
    
}


?>
  <p><a href = "frontpage.php"> Ta meg tilbake til startsiden </a> </p>
</body>


</html>