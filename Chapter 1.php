<?php
$name = "eleven";
$age = 18;
$price = 19.99;
$connected = true;

echo "name : " . $name . "<br>";
echo "age : " . $age . "<br>";
echo "price : " . $price . " €<br>";
echo "connected : " . ($connected ? "Oui" : "Non") . "<br>";

var_dump($name);

$number = "10";
$numberInt = (int)$number;
echo "Conversion : " . $numberInt;  