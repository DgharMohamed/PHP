<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Number : $i <br>";
}

$j = 1;
while ($j <= 5) {
    echo "Iteration : $j <br>";
    $j++;
}

$animals = ["Cat", "Dog", "Rabbit"];
foreach ($animals as $animal) {
    echo "Animal : $animal <br>";
}
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue; 
    if ($i == 8) break;    
    echo "Value : $i <br>";
}
