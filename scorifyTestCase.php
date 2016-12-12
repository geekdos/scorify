<?php
//$handle = STDIN;
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

while (getFileLines($file) != null){
    $number = str_replace('.', '', getFileLines($file));
    printf("%s\n", $number);
}

