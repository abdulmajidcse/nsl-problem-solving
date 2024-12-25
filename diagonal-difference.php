<?php

/*
 * Complete the 'diagonalDifference' function below.
 * 
 * Problem URL: https://www.hackerrank.com/challenges/diagonal-difference/problem/
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
    $left_diagonal_sum = 0;
    $right_diagonal_sum = 0;
    $matrix_length = count($arr) - 1;

    foreach ($arr as $key => $matrix_line) {
        $left_diagonal_sum += $matrix_line[$key];
        $right_diagonal_sum += $matrix_line[$matrix_length - $key];
    }

    return abs($left_diagonal_sum - $right_diagonal_sum);
}

// data sets
$arr1 = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
];

$arr2 = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
];

$arr3 = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

echo diagonalDifference($arr1) . "\n";
echo diagonalDifference($arr2) . "\n";
echo diagonalDifference($arr3) . "\n";
