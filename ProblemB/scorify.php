<?php
//$handle = STDIN;
define('STDIN', 'stdin.txt');
$handle = fopen(STDIN, "r");
function getTestCases($handle) : int
{
    $testCases = (int)trim(fgets($handle), '\n');
    return $testCases;
}
function getFileLines($handle)
{
    $fileContent = trim(fgets($handle));
    $lines = explode('\n', $fileContent);

    return $lines[0];
}
$testCases = getTestCases($handle);

if ($testCases >= 1 && $testCases <= 50){
    for ($i = 0; $i < $testCases; $i++){
        $firstLine = getFileLines($handle);
        parseCase($firstLine);
    }
}

function parseCase($firstLine){
    $params = explode(' ', $firstLine);
    //$M = $params[0][1];
    dd($params[0]);
}


function dd($var){
    echo "<pre>".var_dump($var)."</pre>";
}
