<?php

$edades = array(
    "Carlos" => 20,
    "Juan" => 18,
    "Luna" => 40,
);

echo "La edad de Carlos es: " . $edades["Carlos"];

$cafes = array(
    "capuccino" => 50,
    "latte" => 49,
    "americano" => 70,
);

echo "<br>";

echo "El precio del capuccino es: $" . $cafes["capuccino"];
echo "<br>";
echo "El precio del americano es: \${$cafes['americano']}";
echo "<br>";

$personas = array(
    "carlos" => array(
        "edad" => 25,
        "apellido" => "Santana"
    ),
    "juana" => array(
        "edad" => 25,
        "apellido" => "De Arco"
    ),
);

echo "La edad de Carlos es: " . $personas['carlos']['edad'];