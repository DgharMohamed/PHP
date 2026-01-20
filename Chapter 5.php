<?php
function hi() {
    echo "Hello everyone!";
}
hi();


function addition($a, $b) {
    return $a + $b;
}
echo "Sum : " . addition(5, 10);


function welcome($name = "visitor") {
    echo "Welcome " . $name;
}
welcome();



$counter = 0;

function increment() {
    static $counter = 0;
    $counter++;
    echo $counter;
}
increment();
increment();