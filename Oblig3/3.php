<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>
<body>
<header><h1>Arrays </h1></header>

<?php

echo "Oppgave 4";
echo "<br>";
echo "<br>";

$array = array(1,2,3,23,5,6,7,47,9,10,11,38,13,22, 15, 34, 27, 18, 42, 20);
$teller = 0;
$teller2 = 0;
$sum = 0;

echo "A/B)";
foreach ($array as $verdi) {
echo $verdi." - ";
}
echo"<br>";

echo "C)";
foreach ($array as $verdi ) {
 if($verdi <=25){
    echo $verdi. " - ";
 }
}

echo"<br>";

echo "D)";
foreach ($array as $verdi ) {
 if($verdi > 10 && $verdi < 40){
    echo $verdi. " - ";
 }
}

echo"<br>";

echo "E)";
foreach ($array as $verdi ) {
 if($verdi > 10){
    $teller++; 

 }
}
echo "antall verdier over 10 i arrayet: $teller <br>";

echo "F)";
$sum = array_sum($array);
echo "Den totale verdien i arrayet $sum <br>";


echo "G)";
foreach ($array as $verdi ) {
 if($verdi > 0){
    $teller2++; 
 }
}
$gjennomsnitt = $sum/$teller2;
echo "gjennomsnittsverdien er $gjennomsnitt <br>";

echo "H)";
echo" partallene i arrayet er:";
foreach ($array as $verdi ) {
 if ($verdi %2 == 0 ){
    echo $verdi."-";
 }
}

echo "<br>";

echo "I)";
echo" oddetallene i arrayet er:";
foreach ($array as $verdi ) {
 if ($verdi %2 != 0 ){
    echo $verdi."-";
 }
}

echo "<br>";
echo "<br>";
echo "Oppgave 5";
echo "<br>";
echo "<br>";

$Martin = array("Fornavn" => "Martin", "Etternavn" => "Karlsen", "Klasse" =>"3DAA", "Tid" => 28, "karakter" =>2);
$Kjell =array("Fornavn" => "Kjell", "Etternavn" => "Kork", "Klasse" => "3MDD", "Tid" => 34, "karakter" =>3);
$Anders =array("Fornavn" => "Anders", "Etternavn" => "Fredriksen", "Klasse" => "3STD", "Tid" => 50, "karakter" =>5);
$Petter =array("Fornavn" => "Petter", "Etternavn" => "Jensen", "Klasse" => "1TIPA", "Tid" => 3, "karakter" =>1);
$Maja =array("Fornavn" => "Maja", "Etternavn" => "Nordvoll", "Klasse" => "3KDA", "Tid" => 32, "karakter" =>6);

$Martin["Fornavn"] = "Martin"; 
$Martin["Etternavn"] = "Karlsen"; 
$Martin["Klasse"] = "3DAA"; 
$Martin["Tid"] = 28; 
$Martin["karakter"] = 2; 

$Kjell["Fornavn"] = "kjell"; 
$Kjell["Etternavn"] = "Kork"; 
$Kjell["Klasse"] = "3MDD"; 
$Kjell["Tid"] = 34; 
$Kjell["karakter"] = 3; 

$Anders["Fornavn"] = "Anders"; 
$Anders["Etternavn"] = "Fredriksen"; 
$Anders["Klasse"] = "3STD"; 
$Anders["Tid"] = 50; 
$Anders["karakter"] = 5; 

$Petter["Fornavn"] = "Petter"; 
$Petter["Etternavn"] = "Jensen"; 
$Petter["Klasse"] = "1TIPA"; 
$Petter["Tid"] = 3; 
$Petter["karakter"] = 1; 

$Maja["Fornavn"] = "Maja"; 
$Maja["Etternavn"] = "Nordvoll"; 
$Maja["Klasse"] = "3KDA"; 
$Maja["Tid"] = 32; 
$Maja["karakter"] = 6; 

echo "Resultat prøve:\n"; 
echo "<br>";
echo "Fornavn:" . $Maja["Fornavn"], "\n"; 
echo "<br>";
echo "etternavn:" . $Maja["Etternavn"], "\n"; 
echo "<br>";
echo "klasse:" . $Maja["Klasse"], "\n"; 
echo "<br>";
echo "tid:" . $Maja["Tid"], "\n"; 
echo "<br>";
echo "karakter:" . $Maja["karakter"], "\n"; 

echo "<br>" ;
echo "<br>";
echo "Oppgave 6";
echo "<br>";
echo "A)";
$random = array();
for($x =0; $x < 100; $x++){
    $random[$x] = rand(0, 1000);
    echo $random[$x]."-";
}
echo "<br>";

echo"B)";
$høyest = 0; 
foreach ($random as $index => $verdi){
    if($verdi > $høyest){
        $høyest = $verdi;
    }
}
echo "Høyeste verdi er $høyest";
echo"<br>";


echo "C)";
$laveste = 1000; 
foreach ($random as $index => $verdi){
    if($verdi < $laveste){
        $laveste = $verdi;
    }
}
echo "laveste verdi er $laveste";

echo"<br>";

echo"D)";
                                                                                                                                                                                                                                                                                                                                         
foreach ($random as $index => $verdi){
    if($verdi < 499){
        $teller++;
    }
}
echo "antall verdier mellom 0 og 499 er $teller";

echo"<br>";
echo"<br>";

echo"Oppgave 7";
echo"<br>";
echo"A)";
$hobbyer = array (
    array("Damer","deilige","fine", "digge"),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );





?> 



</body>