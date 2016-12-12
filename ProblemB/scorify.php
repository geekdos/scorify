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

if ($handle && $testCases >= 1 && $testCases <= 50) {
    while (($line = fgets($handle)) !== false) {
        $result = getLine($line);
        if ($testCases != 0){
            $testCasesParams = explode(' ', $result);
            $m = $testCasesParams[0];$c = $testCasesParams[1];$n = $testCasesParams[2];
        }
        if ($m >= 3 && $m <= 10 && strlen($c) >= 1 && strlen($c) <= 5 && $n >= 1 && $n <= 100) {
            $counter = 0;
            for ($i = 0; $i < $n; $i++) {
                $line = fgets($handle);
                $case = explode('-', $line);
                if (strlen($line) <= 80) {
                    if (strlen($case[1]) == $m && strcmp($c, substr($case[0], 0, strlen($c))) == 0) {
                        $counter++;
                    }
                }

            }

            printf("%d\n", $counter);
            $testCases--;
        }
    }

    fclose($handle);
} else {
    printf("You have an error on your file");
}
/*

*/
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
