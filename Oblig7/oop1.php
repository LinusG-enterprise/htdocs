<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <header><h1>Oblig 7</h1></header>
    <form class= center action="oop1.php" method="post">
Ditt fornavn: <input type="text" name="name"><br>
<input type="submit">

<?php include ("class_lib.php");

    $linus = new person();
    $bob = new person();
    $jeff = new person();
    $maja = new person();

    $linus->_construct("Linus Gylseth");
    $linus->set_age("17");
    $linus->set_mobil("94976120");
    $linus->set_epost("linusgy@viken.no");
  

    $bob->_construct("Bob Jhonny Jensen");
    $bob->set_age("48");
    $bob->set_mobil("98023984");
    $bob->set_epost("bobj@truckereu.org");


    $jeff->_construct("Jeff Joff Jaff");
    $jeff->set_age("69");
    $jeff->set_mobil("42069420");
    $jeff->set_epost("joffejeff@live.no");

    $maja->_construct("Maja Larsen Nordvoll");
    $maja->set_age("18");
    $maja->set_mobil("hemmelig");
    $maja->set_epost("hemmelig");

  if (isset($_POST["name"])){
      $name = $_POST["name"];

      if($name == "Bob"){
    echo ("<br>");
    echo ("<br>");
    echo "Bob sitt fulle navn er : ". $bob->get_name();
    echo ("<br>");
    echo "Alderen til Bob er : ". $bob->get_age();
    echo ("<br>");
    echo "Telefonnummeret til Bob er: ". $bob->get_mobil();
    echo ("<br>");
    echo "Eposten til Bob Er : ". $bob->get_epost();
    }

    if($name == "Linus"){
        echo ("<br>");
        echo ("<br>");
        echo "Linus sitt fulle navn er : ". $linus->get_name();
        echo ("<br>");
        echo "Alderen til Linus er : ". $linus->get_age();
        echo ("<br>");
        echo "Telefonnummeret til Linus er: ". $linus->get_mobil();
        echo ("<br>");
        echo "Eposten til Linus Er : ". $linus->get_epost();
    }

    elseif($name == "Jeff"){
        echo ("<br>");
        echo ("<br>");
        echo "Jeff sitt fulle navn er : ". $jeff->get_name();
        echo ("<br>");
        echo "Alderen til Jeff er : ". $jeff->get_age();
        echo ("<br>");
        echo "Telefonnummeret til Jeff er: ". $jeff->get_mobil();
        echo ("<br>");
        echo "Eposten til Jeff Er : ". $jeff->get_epost();
    }
  

  elseif($name == "Maja"){
    echo ("<br>");
    echo ("<br>");
    echo "Maja sitt fulle navn er : ". $maja->get_name();
    echo ("<br>");
    echo "Alderen til Maja er : ". $maja->get_age();
    echo ("<br>");
    echo "Telefonnummeret til Maja er: ". $maja->get_mobil();
    echo ("<br>");
    echo "Eposten til Maja Er : ". $maja->get_epost();
  }

  else{
      echo ("søket ditt ga ingen treff");
  }
    }

?>

