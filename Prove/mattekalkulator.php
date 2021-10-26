<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mattekalkulator</title>
</head>
<body>

<header><h1>mattekalkulator </h1></header>

<form class= center action="mattekalkulator.php" method="post">
Tall 1: <input type="text" name="tall1"><br>
Tall 2: <input type="text" name="tall2"><br>
<input type="radio"  name="input" value="+">
<label for="pluss">+</label><br>
<br>
<input type="radio"  name="input" value="-">
<label for="minus">-</label><br>
<br>
<input type="radio"  name="input" value="/">
<label for="dele">/</label><br>
<br>
<input type="radio"  name="input" value="*">
<label for="gange">*</label><br>
<br>
<input type="radio"  name="input" value="X">
<label for="tall1i2">Tall 1 opphøyd i tall 2</label><br>
<br>
<input type="submit">

<?php
if (isset($_POST["tall1"]) && isset($_POST["tall2"]) && isset($_POST["input"]) ){
    $input = $_POST["input"];
    $en = $_POST["tall1"];
    $to = $_POST["tall2"];
    $res = 0;

    if($input == "+"){
        $res = $en+$to;
        echo "resultat av kalkulasjonen: $res";
    }

    elseif($input == "-"){
        $res = $en-$to;
        echo "resultat av kalkulasjonen: $res";
    }

    elseif($input == "*"){
        $res = $en*$to;
        echo "resultat av kalkulasjonen: $res";
    }

    elseif($input == "/"){
        $res = $en/$to;
        echo "resultat av kalkulasjonen: $res";
    }

    else{
        $res = $en*($en*$to);
        echo "resultat av kalkulasjonen: $res";
    }
    
}



?>