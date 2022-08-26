<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $price) {
    echo "El café en cuestión cuesta $$price USD";
    echo "<br>";
}

echo "<br>";

foreach ($tiendita_de_cafes as $cafe => $price) {
    echo "El café $cafe cuesta $$price USD";
    echo "<br>";
}