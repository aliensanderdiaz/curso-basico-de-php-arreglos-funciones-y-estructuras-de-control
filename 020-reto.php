<?php
// https://www.php.net/manual/es/function.date.php
function obtener_hora() {
    return date("h:i a");
}

echo "¡Hola! ¿Me podrías decir la hora? <br>";
echo "¡Claro! Son las " . obtener_hora();