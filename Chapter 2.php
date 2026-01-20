<?php


$age = 17;
if ($age >= 18) {
    echo "tu es un adulte.";
} else {
    echo "tu es un enfant.";
}

$note = 14;
if ($note >= 16) {
    echo "Excellent";
} elseif ($note >= 10) {
    echo "Passable";
} else {
    echo "Échoué";
}


$jour = "jeudi";
switch ($jour) {
    case "lundi":
        echo "début de la semaine";
        break;
    case "vendredi":
        echo "le dernier jour de la semaine";
        break;
    default:
        echo "jour normal";
}