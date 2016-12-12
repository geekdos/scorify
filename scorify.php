<?php
//$handle = STDIN;
define('STDIN', 'stdin.txt');
$handle = fopen(STDIN, "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {

        // logic here
        $result = str_replace('.', '', getLine($line));

        printf("%s\n", $result);
    }

    fclose($handle);
} else {
    printf("You have an error on your file");
}

function getLine($lineFile){
    $lines = explode('\n', $lineFile);
    return $lines[0];
}