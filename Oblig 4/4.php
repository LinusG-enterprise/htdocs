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

<form class= center action="4.php" method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>
<?php

$teller = 0;
echo ("a/b");
echo ("<br>");

if (isset($_POST["name"])){
$name = $_POST["name"];
  for ($i = 0; $i < 5; $i++){
    echo ($name."-");
  }

}
?>

</body>