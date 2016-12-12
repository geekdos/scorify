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

if ($handle && $testCases >= 1 && $testCases <= 20) {
    while (($line = fgets($handle)) !== false) {
        $result = getLine($line);
        if ($testCases != 0) {
            $counter = 0;
            $testCasesParams1 = explode(' ', $result);
            $testCasesParams2 = explode(' ', getLine(fgets($handle)));
            $env = count($testCasesParams1);
            if ($env == 4){
                list($r, $x, $y, $z) = $testCasesParams1;
                for ($i = 0; $i < count($testCasesParams2); $i++){
                    $x1 = (int) $testCasesParams2[$i];
                    $y1 = (int) $testCasesParams2[$i++];
                    $z1 = (int) $testCasesParams2[$i++];
                    $distance = sqrt(pow(($x - $x1), 2) + pow(($y - $y1),2) + pow(($z - $z1),2));
                    if ($distance <= $r)
                        $counter++;
                }
            }else{
                list($r, $x, $y) = $testCasesParams1;
                for ($i = 0; $i < count($testCasesParams2); $i++){
                    $x1 = (int) $testCasesParams2[$i];
                    $y1 = (int) $testCasesParams2[$i++];
                    $distance = sqrt(pow(($x - $x1), 2) + pow(($y - $y1),2));
                    if ($distance <= $r)
                        $counter++;
                }
            }
        }
        printf("%d\n", $counter);
        $testCases--;
    }

    fclose($handle);
} else {
    printf("You have an error on your file");
}

function getLine($lineFile)
{
    $lines = explode('\n', $lineFile);
    return $lines[0];
}

function parseCase($firstLine)
{
    $params = explode(' ', $firstLine);
    return $params;
}


function dd($var)
{
    echo var_dump($var);
}
