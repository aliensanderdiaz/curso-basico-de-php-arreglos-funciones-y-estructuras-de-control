<?php

$dinero = (int) readline("Ingresa el dinero que tienes donado(En Dolares): ");
// echo "<br>";
if ($dinero > 100) {
    echo "Tu dinero ya ha pasado a tu cuenta bancaria, tu nuevo saldo es 0";
} else {
    echo "Para poder retirar tu dinero debes tener acumulado mas de 100 dolares";
}

// echo "<br>";