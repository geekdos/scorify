<?php
define('STDIN', 'stdin.txt');
$file = fopen(STDIN, "r");
function getTestCases($file) : int
{
    $testCases = (int)trim(fgets($file), '\n');
    return $testCases;
}
function getFileLines($file)
{
    $fileContent = trim(fgets($file));
    $lines = explode('\n', $fileContent);

    return $lines[0];
}
function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "<pre>";
}
$testCases = getTestCases($file);

for ($i = 0; $i < $testCases; $i++) {
    $number = str_replace('.', '', getFileLines($file));
    //if ($number >= 0 && $number <= 100)
        printf("%.10f\n", $number);
}
