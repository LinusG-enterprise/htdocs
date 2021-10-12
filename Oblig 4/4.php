<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>

<header><h1>Looped pizza </h1></header>

<!-- inputte verdier -->
<form class= center action="4.php" method="post">
Name: <input type="text" name="name"><br>
<input type="radio"  name="printAntall" value="1">
<label for="1">1</label><br>
<input type="radio"  name="printAntall" value="5">
<label for="5">5</label><br>
<input type="radio"  name="printAntall" value="10">
<label for="10">10</label>
<br>
<select id="printAntall2" name="printAntall2">
    <option value="1">1</option>
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="42069">42069</option>
  </select>
<br>
<input type="submit">

</form>
<?php


echo ("Oppgave 1");
echo ("<br>");

if (isset($_POST["name"])){

  $name = $_POST["name"];

  for ($i = 0; $i < 5; $i++){
    echo ($name."-");
  }
}

echo ("<br>");
echo ("<br>");
// vise hvilken oppgave som skrives ut på nettside
echo ("Oppgave 2");
echo ("<br>");
// hente verdier fra post
if (isset($_POST["printAntall"])){
// definere verdien av den valgte radioknappen som en funksjon
  $antall = $_POST["printAntall"];
// hente navnet som skal skrives fra post
  $name = $_POST["name"];
  //få koden til å printe ut navnet like mange ganger som definert av radioknappen
  for ($i = 0; $i < $antall; $i++){
    echo ($name."-");
  }

}

echo ("<br>");
echo ("<br>");
echo ("Oppgave 3");
echo ("<br>");
if (isset($_POST["printAntall2"])){

    $antall = $_POST["printAntall2"];

    $name = $_POST["name"];

    for ($i = 0; $i < $antall; $i++){

      echo ($name."-");
    }
  
  }

  echo ("<br>");
  echo ("<br>");
  echo ("Oppgave 4");
  echo ("<br>");

$tabell = array(35, 37, 42, 36, 45, 78, 13, 44, 33, 89);
sort($tabell);
$arrlength = rsort($tabell);
for($x = 0; $x < $arrlength; $x++) {
  print_r($tabell);
}


echo ("<br>");
echo ("<br>");
echo ("Oppgave 5");
echo ("<br>");
echo ("gira på en pizza?");

?>

<p><a href = "Oblig 4/../pizza.php"> Linus piller, prell og pizza </a> </p>

</body>