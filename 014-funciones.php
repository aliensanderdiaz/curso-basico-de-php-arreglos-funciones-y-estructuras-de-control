<?php

function getPokemon()
{
    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Charmander <br>";
            break;
        case 2:
            echo "Pikachu <br>";
            break;
        case 3:
            echo "Mewtwo <br>";
            break;

        default:
        echo "Lo siento no tenemos Pokemon <br>";
            break;
    }
}

for ($i=0; $i < 20; $i++) { 
    getPokemon();
}