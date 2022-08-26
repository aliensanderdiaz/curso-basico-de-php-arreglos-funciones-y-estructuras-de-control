<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $cafe => $price) {
    echo "Actualmente encontré al café $cafe";
    echo "<br>";

    if ($cafe == "Latte") {
        echo "Encontré al café Latte!";
        echo "<br>";
        break;
    }
}

echo "<br>";
echo "<br>";

foreach ($tiendita_de_cafes as $cafe => $price) {

    if ($cafe == "Recalentado") {
        continue;
    }

    echo "El café $cafe es muy rico";
    echo "<br>";
}