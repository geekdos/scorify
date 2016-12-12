<?php
$file = fopen ("sdtin.txt", "r");

for ($i = 0; $i < 3 ; $i++){

    printf("%d\n",countWord(trim(fgets($file))));
}

function countWord($phrase){

    $lines = explode('\n',$phrase);

    $line = implode("", $lines);

    $number = str_word_count($line);

    return $number;

}

