<?php

$usernames = ["Pepito123", "Mr. Michi", "RetaxMain"];

do {
    # code...
    $username = readline("Por favor ingresa tu nuevo nombre de usuario: ");
} while ( in_array($username, $usernames) );