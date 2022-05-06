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

<h2>hvilken person ønsker du å slette?</h2>
<div class="innskudd">
<div class="forum">
<form action="sletteperson.php" method="post">
<select name="person" id="person">
<option selected value="0">Velg person</option>
<?php
$SQL = new mysqli("localhost", "root", "", "busy");
if ($SQL->connect_error) die("Connection Failed: " . $conn->connect_error);
$res = $SQL->query("SELECT `id`, `fornavn` FROM personer ORDER BY `fornavn`;");
if($res->num_rows > 0) {
while($row = $res->fetch_assoc()) {
echo "<option value='" . $row["id"] ."'>" . $row["fornavn"] . "</option>";
}
}
?>
</select><br>
 
<input type="submit">
</form>
</div>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST['person']) && $_POST['person'] > 0) {
        $conn = new mysqli($servername, $username, $password, 'Busy');

        
        if ($conn->connect_error) die("Connection Failed: " . $conn->connect_error);
        echo "Connected Sucesfully", "<br>";

    

        $sql = "DELETE FROM personer WHERE `id` = " . $_POST['person'];

        echo "Suksessfult slettet";
        $conn->query($sql);
        }
    }
    ?>

</body>

<br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> 
<p><a href = "../frontpage.php"> Ta meg tilbake til startsiden </a> </p>