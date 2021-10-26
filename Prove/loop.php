<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body>

<header><h1>Loop</h1></header>

<?php
$alfabet = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","æ","ø","å");

for($i =0; $i<=27; $i++){
    echo "$i:";
    echo "$alfabet[$i]";
    for($x =0; $x<=1; $x++){
        echo"<br>";
    }
}

?>
