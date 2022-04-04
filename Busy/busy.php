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

<header><h1>Linus's lille eskorte-tjeneste
</header>
<img src="amogus.gif" alt="amogus" class="left"> </h1>

<h1>Bestill den perfekte horen til din neste firmafest eller Julebord! </h1>
<form class= center action="busy.php" method="post">
Firmanavn: <br><input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
Organisasjonsnummer:<br> <input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
Forretningsadresse:<br> <input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
Leveringsadresse:<br> <input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
Postnummer: <input type="text" name="name"><form class= center action="busy.php" method="post">
Poststed <input type="text" name="name"><br>
<input type="radio"  name="levering" value="hentes">
<label for="hentes">Kunde</label><br>
<input type="radio"  name="levering" value="hentes">
<label for="hentes">Levrandør</label><br>
<form class= center action="busy.php" method="post">
Fornavn:<br> <input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
Etternavn:<br> <input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
Rolle:<br> <input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
E-post: <br><input type="text" name="name"><br>
<form class= center action="busy.php" method="post">
Telefonnummer:<br> <input type="text" name="name"><br>
<input type="submit">

<?php

$servername = "localhost"; 
$username = "root"; 
$password= "";
$dbname = "busy";

$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>

</body>
</html>