<?php

function fredy($numero_aleatorio)
{
    switch ($numero_aleatorio) {
        case 1:
            return "Nunca pares de aprender. <br>";
        case 2:
            return "Las empresas no son familia. <br>";
        case 3:
            return "La tecnología es el futuro <br>";
        case 4:
            return "Amo PHP <br>";
    }
}


echo (fredy(rand(1, 4)));
echo (fredy(rand(1, 4)));
echo (fredy(rand(1, 4)));
echo (fredy(rand(1, 4)));
