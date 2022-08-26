<?php

$precios_de_cafe = [12, 56, 32, 89, 2, 1];

usort($precios_de_cafe, function($a, $b) {
    return $a <=> $b;
});

print_r($precios_de_cafe);