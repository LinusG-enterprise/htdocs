<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI frontpage</title>
</head>
<body>
<header><h1>BMI KALKULATOR </h1></header>

<form class= center action="bmikalkulator.php" method ="post">
    <input type="text" name="name">Ditt navn<br>
    <input type="text" name="height">Høyde<br>
    <input type="text" name="weight">Vekt<br>
    <input type="radio" name="gender" value = mann>mann <br>
    <input type="radio" name="gender" value = mann>kvinne <br>
    <input type="submit" value="Kalkuler BMI"> <br>

</form>
<?php
if (isset ($_POST["name"]) && isset($_POST["height"]) && isset(["weight"]) && isset($_POST["gender]"])) ;
  $navn = $_POST["name"];
  $hoyde = $_POST["height"];
  $vekt = $_POST["weight"];
  $kjonn = $_POST["gender"];  
 

  $bmi = $vekt/(($height/100)*($height/100))*10000;

  if ($bmi < 17){
    echo "$navn, du er syltynn jo! din bmi er $bmi";
  }

  elseif($bmi > 17 && $bmi<25 {
    echo "$navn, Du har en god vekt. din BMI er $bmi";
  }
  else {
    echo "$navn, NEII SÅÅ JUKK DU HAR BLITT! din bmi er $bmi":
  }

?>
<br>



<footer>
  <p>Designer: Linus Gylseth<br>
  
  
<!--<p><a href = "../../1/index.php"> Ta meg tilbake til startsiden </a> </p>-->
  
</footer>
</html>



</body>
</html>