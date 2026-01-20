<?php
$animals = ["cat", "dog", "rabbit"];
echo "first animal : " . $animals[0] . "<br>";

foreach ($animals as $animal) {
    echo "Animal : $animal <br>";
}

$car = [
    "brand" => "Toyota",
    "model" => "Corolla",
    "year" => 2020
];
echo "Model : " . $car["model"] . "<br>";

$fruits = ["Apple", "Banana"];
array_push($fruits, "Mango");
unset($fruits[1]);
echo "Number of fruits : " . count($fruits);