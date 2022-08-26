<?php

function clear()
{

    // if (PHP_OS === "WINNT")
    // system("cls");
    for ($i = 0; $i < 50; $i++) echo "\r\n";
    // else
    // system("clear");

}

$possible_words = [
    "Bebida",
    "Prisma",
    "Ala",
    "Dolor",
    "Piloto",
    "Baldosa",
    "Terremoto",
    "Asteroide",
    "Gallo",
    "Platzi"
];

define("MAX_ATTEMPS", 6);

echo "¡Juego del ahorcado!";

echo "\n";
echo "\n";

$choosen_word = $possible_words[rand(0, count($possible_words) - 1)];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$disovered_letters = str_pad("", $word_length, "_");
$attemps = 0;

do {
    # code...

    echo "\n";
    echo  "Palabra de $word_length letras";
    echo "\n";
    echo $disovered_letters . "\n\n";

    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    // $pos = strpos($choosen_word, $player_letter);

    // if ($pos) {
    //     echo "La letra $player_letter se encuetra en la posición " . ($pos + 1);
    // } else {
    //     echo "La letra $player_letter no se encuentra en la palabra";
    // }

    // echo $choosen_word . " - " . $player_letter;

    // var_dump(str_contains($choosen_word, $player_letter));

    // if (str_contains($choosen_word, $player_letter)) {
    if (strpos($choosen_word, $player_letter) !== false) {
        $offset = 0;
        while (($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false) {
            $letter_position = strpos($choosen_word, $player_letter, $offset);
            $offset = $letter_position + 1;
            // echo $letter_position . " - " . $offset;

            $disovered_letters[$letter_position] = $player_letter;
        }
        echo $disovered_letters;
    } else {
        $attemps++;
        clear();
        echo "Letra incorrecta, te quedan " . (MAX_ATTEMPS - $attemps) . " intentos.";
    }
} while ($attemps < MAX_ATTEMPS && $disovered_letters != $choosen_word);


clear();

echo "\n";
echo "\n";

if ($attemps < MAX_ATTEMPS) {
    echo "Felicidades";
} else {
    echo "Vuelve a intentarlo";
}