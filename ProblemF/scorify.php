<?php
//$handle = STDIN;
define('STDIN', 'stdin.txt');
$handle = fopen(STDIN, "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $result = getLine($line);
        $params = str_split($result);
        $expression = null;
        foreach ($params as $value){
            if ($value != '~' && $value != '|' && $value != '&' && $value != '^'){
                $expression += $value;
            }else{
                if ($value == '~')
                    $expression += ' ! ';
                if ($value == '^')
                    $expression += ' XOR ';
                if ($value == '|')
                    $expression += ' || ';
                if ($value == '&')
                    $expression += ' && ';
            }
        }

        if ($expression == 0)
            printf("<>\n");
        else
            printf("=\n");
        //break;
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
    echo var_dump($var);
}