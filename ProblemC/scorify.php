<?php
//$file = STDIN;
define('STDIN', 'stdin.txt');
$handle = fopen(STDIN, "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $result = getLine($line);
        $result = explode(' ', $result);
        $cotise = $result[0];
        $Nmin = $result[1];
        $counter = 0;
        for ($i = 2; $i < count($result); $i++) {
            if (($result[$i] / 2) >= $cotise) {
                $counter++;
            }
        }
        if ($counter >= $Nmin)
            printf("%d", $Nmin);
        else
            printf("-");
    }

    fclose($handle);
} else {
    printf("You have an error on your file");
}

function getLine($lineFile){
    $lines = explode('\n', $lineFile);
    return $lines[0];
}
function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "<pre>";
}