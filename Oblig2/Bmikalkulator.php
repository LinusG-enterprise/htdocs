<?php
/*
Dere skal nå lage en kalkulator som beregner en brukers BMI basert på hva brukeren legger inn. 

STEP1

Lag en webside (med en form) hvor en bruker kan legge inn input.  De input som skal legges inn er:

•	Brukerens navn
•	Brukernes høyde
•	Brukerens vekt
•	Brukerens kjønn

Dette gjøres på en egen side som kalles index.php via en html form. Data skal sendes herfra til resultat.php, hvor dere skal ta imot de data som sendes inn. Brukerens BMI skal beregnes på bakgrunn av høyde og vekt. 

Avhengig av brukerens BMI og kjønn skal dere gi brukeren ulike tilbakemeldinger. Det skal minimum være 3 ulike tilbakemeldinger for hvert kjønn (6 meldinger totalt) avhengig av resultatet. 

*/

if(isset8$_POST["name"]) && isset($_POST["height"]) && isset($_POST[weight]) && isset($_POST["gender"])){
    
    $navn = $_POST["name"];
    $hoyde = $_POST["height"];
    $vekt = $_POST["weight"];
    $kjonn = $_POST["gender"];

}

?>

