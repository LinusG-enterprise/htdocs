<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontpage</title>
</head>
<body>

<header><h1>Linus's godtebutikk
</header>
<h1>Slett informasjon:</h1>

<h2>hvilket firma ønsker du å slette?</h2>
<div class="innskudd">
<div class="forum">
<form action="slettefirma.php" method="post">
<select name="firma" id="firma">
<option selected value="0">velg firma</option>

<?php


$SQL = new mysqli("localhost", "root", "", "busy");
if ($SQL->connect_error) die("Connection Failed: " . $conn->connect_error);
$res = $SQL->query("SELECT `id`, `navn` FROM firma ORDER BY `navn`;");
if($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "<option value='" . $row["id"] ."'>" . $row["navn"] . "</option>";
    }
}
?>

</select><br>
<input type="submit">
</form>
</div>
</div>

<?php

if(isset($_POST["firma"])) {

$servername = "localhost";
$username = "root";
$password = "";
$firma = $_POST['firma'];


if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (isset($_POST['firma']) && $_POST['firma'] > 0) {
$conn = new mysqli($servername, $username, $password, 'busy');

if ($conn->connect_error) die("Connection Failed: " . $conn->connect_error);
echo "Connected Sucesfully", "<br>";

$sql = "DELETE FROM firma WHERE `id` = " . $firma;

echo "Suksessfult slettet";

$conn->query($sql);
}
}
}

?>

<br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> 
<p><a href = "../frontpage.php"> Ta meg tilbake til startsiden </a> </p>