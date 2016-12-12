<?php
//$handle = STDIN;
define('STDIN', 'stdin.txt');
$handle = fopen(STDIN, "r");

function getTestCases($handle) : int
{
    $testCases = (int)trim(fgets($handle), '\n');
    return $testCases;
}

$testCases = getTestCases($handle);


if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $result = getLine($line);
        $TestCaseParams = parseCase($result);
        $m = (int) $TestCaseParams[0]; $c = $TestCaseParams[1]; $n = (int) $TestCaseParams[2];
        for ($j = 0; $j < $n; $j++){
            dd($m);
            dd($n);
            dd($c);
        }
    }

    fclose($handle);
} else {
    printf("You have an error on your file");
}

function getLine($lineFile){
    $lines = explode('\n', $lineFile);
    return $lines[0];
}

function parseCase($firstLine){
    $params = explode(' ', $firstLine);
    return $params;
}


function dd($var){
    echo "<pre>".var_dump($var)."</pre>";
}
