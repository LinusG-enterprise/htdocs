<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="pizzastil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>

<header><h1 style="background-color: red";>Linus  </h1></header>
<header><h1 style="background-color: white"; > Piller, Prell  </h1></header>
<header><h1 style="background-color: green";> Phitte og Pizza </h1></header>



<form class= center action="pizza.php" method="post">
Ditt navn: <input type="text" name="name"><br>
<input type="radio"  name="levering" value="hentes">
<label for="hentes">Hentes</label><br>
<input type="radio"  name="levering" value="hjemmelevering">
<label for="hjemmelevering">hjemmelevering</label><br>

Adresse: <input type="text" name="adresse"><br>
<br>
<select id="pizzavalg" name="pizzavalg">
    <option value="Big Sausage Pizza">Big Sausage Pizza</option>
    <option value="Generalens pizza">Generalens pizza</option>
    <option value="Mystisk fiskepizza">Mystisk fiskepizza</option>
  </select>

<br>
<input type="radio"  name="ekstraost" value="med ekstra ost">
<label for="ekstra ost">ekstra ost</label><br>
<input type="radio"  name="ekstraost" value=" uten ekstra ost">
<label for="ingen ekstra ost">ingen ekstra ost</label><br>
<input type="submit">
<br>
<?php
  if (isset($_POST["name"]) && isset($_POST["levering"]) 

  && isset($_POST["pizzavalg"]) && isset($_POST["ekstraost"])){
      $name = $_POST["name"];
      $levering = $_POST["levering"];
      $pizzavalg = $_POST["pizzavalg"];
      $ekstraost = $_POST["ekstraost"]; 
      $adresse = $_POST["adresse"];

    if($levering == "hjemmelevering"){
        echo "takk for din bestilling $name, du har bestillt en $pizzavalg $ekstraost og $levering til adressen $adresse";
    }

    else{
        echo "takk for din bestilling $name, du har bestillt en $pizzavalg $ekstraost som skal $levering";  
    }

}



?>