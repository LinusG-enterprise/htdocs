<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filhåndtering</title>
</head>
<body>

<header><h1>Filhåndtering </h1></header>


<?php
echo "oppgave 1";
echo "<br>";
echo "<br>";

$myfile = fopen("sitater.txt", "w");
  
$txt = "Sitater:\n";
fwrite($myfile, $txt);  

$txt = "IKKE KLEM FOR HARDT! DA SPRUTER DET -Marius\n";
fwrite($myfile, $txt);  

$txt = "Databrus hjelper -Linus\n";
fwrite($myfile, $txt);  

$txt = "BArgHwhawhwhwhh -Erling\n";
fwrite($myfile, $txt);  

$txt = "Da jeg kommer inni datamaskinen- Clausen\n";
fwrite($myfile, $txt);  

$txt = "jeg vil dø - oscar\n";
fwrite($myfile, $txt);  

$txt = "Han som aldri har lært å følge ordre kan aldri bli en god leder. - Aristotles\n";
fwrite($myfile, $txt);  

$txt = "Hvis de blinde leder de blinde vil alle ende i grøfta. - Jesus Kristus\n";
fwrite($myfile, $txt);  

$txt = "Vent ikke på lederen. Gjør det selv, person til person. - Mor Theresa\n";
fwrite($myfile, $txt);  

$txt = "Aldri avbryt en fiende når han er i ferd med å gjøre en feil. - Napoleon\n";
fwrite($myfile, $txt);  

$txt = "Ugress er blomster de også, når du blir kjent med dem. - Tussi\n";
fwrite($myfile, $txt);

fclose($myfile);


$fil = fopen("sitater.txt","r");

while( $linje = fgets($fil) )  
{
    echo  $linje . "<br />";  
}

fclose($fil);

echo "<br>";
echo "oppgave 2";
echo "<br>";
echo "<br>";

$myfile = fopen("sitater.txt", "r") or die("Unable to open file!");
$liste = array();
$teller = 0;

while (!feof($myfile)){

    $liste[$teller] = fgets($myfile);
    $teller++;

}

fclose($myfile);

echo $liste[rand(0, count($liste)-1)];

echo "<br>";
echo "<br>";
echo "oppgave 3";
echo "<br>";
?>

<form action="6.php" method="post">
sitat: <input type="text" name="sitat"><br>
Sitat av: <input type="text" name="opphaver"><br>
<input type="submit">

<?php
 $myfile = fopen("sitat.txt", "w")or die("Unable to open file");

if (isset($_POST["modell"]) && isset($_POST["mil"])) {
    $sitat = $_POST["sitat"];
    $opphaver = $_POST["opphaver"];

  
$txt = "$sitat:\n";
$txt = "$opphaver:\n";
fwrite($myfile, $txt);  

    echo "$sitat";
    echo "<br>";
    echo "$opphaver";
}
?>

</body>