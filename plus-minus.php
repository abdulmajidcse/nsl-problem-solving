<?php

/*
 * Complete the 'plusMinus' function below.
 * 
 * Problem URL: https://www.hackerrank.com/challenges/plus-minus/problem/
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
function plusMinus($arr)
{
    // Write your code here
    $arrCount = count($arr);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    foreach ($arr as $value) {
        if ($value > 0) {
            $positiveCount += 1;
        } elseif ($value < 0) {
            $negativeCount += 1;
        } elseif ($value == 0) {
            $zeroCount += 1;
        }
    }

    echo number_format($positiveCount / $arrCount, 6) . "\n";
    echo number_format($negativeCount / $arrCount, 6) . "\n";
    echo number_format($zeroCount / $arrCount, 6) . "\n";
}


// data sets
$arr1 = [1, 1, 0, -1, -1];
$arr2 = [-4, 3, -9, 0, 4, 1];
$arr3 = [1, 2, 3, -1, -2, -3, 0, 0];
$arr4 = [-1, -2, -3, 1, 4, 5, 0, 0];

plusMinus($arr1);