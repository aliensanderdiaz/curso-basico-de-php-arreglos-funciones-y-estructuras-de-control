<?php

function esEstudianteLegend($platzi_rank) {
    if ($platzi_rank > 20000) {
        echo "Felicitaciones! Tu eres legend";
        echo "<br>";
    } else {
        echo "Aún no eres legend";
        echo "<br>";
    }
}

esEstudianteLegend(16000);
esEstudianteLegend(26000);