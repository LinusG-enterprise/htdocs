<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>co</title>
</head>
<body>

<header><h1>Co2 utslipp </h1></header>

<form class= center action="co.php" method="post">
Bil modell: <input type="text" name="modell"><br>
Co2 utslipp per mil: <input type="text" name="mil"><br>
årlig kjørelengde: <input type="text" name="kjørelengde"><br>   
Antall år du vil kjøre bilen: <input type="text" name="år"><br>
<input type="submit">

<?php
if (isset($_POST["modell"]) && isset($_POST["mil"]) 

&& isset($_POST["kjørelengde"]) && isset($_POST["år"])){
    $modell = $_POST["modell"];
    $mil = $_POST["mil"];
    $kjørelengde = $_POST["kjørelengde"];
    $år = $_POST["år"]; 

$utslipp= $mil/10*$kjørelengde;
$årsutslipp= ($utslipp*$år)/$år;
$totalutslipp= $årsutslipp*$år;
$teller = $år;


echo ("<br>");
echo ("CO2 regnskap for min bil av typen $modell");
echo ("<br>");
for($i =1; $i<=$år; $i++){
echo "Dette året har utslippet vært $årsutslipp, og totalen alle år er:".$utslipp++;
echo ("<br>");

}

}





?>
