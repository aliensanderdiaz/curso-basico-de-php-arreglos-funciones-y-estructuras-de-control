<?php

$escuela = array(
    array(
        "Nombre" => "Michijose",
        "Ocupacion" => "Developer Increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),
    array(
        "Nombre" => "Michisancio",
        "Ocupacion" => "Engineer Increible",
        "Color" => "Negro",
        "Comidas" => array(
            "Favoritas" => "Pepas, Atun",
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),
    array(
        "Nombre" => "Mr.Michi",
        "Ocupacion" => "Diseñador Increible",
        "Color" => "Blanco",
        "Comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),
);

echo "Las comidas favoritas de Michisancio son: {$escuela[1]['Comidas']['Favoritas']}";
echo "<br>";
$michisancio = $escuela[1];
echo "Las comidas favoritas de Michisancio son: " . $michisancio['Comidas']['Favoritas'];
echo "<br>";

$ejemplo = "Alex";
echo "Mi nombre es $ejemplo";
echo "<br>";
echo "Mi nombre es {$ejemplo}";
echo "<br>";
echo "Mi nombre es ${ejemplo}";


$mr_michi = $escuela[2];

echo "<br>";

echo "El color de Mr. Michi es " . $mr_michi['Color'];