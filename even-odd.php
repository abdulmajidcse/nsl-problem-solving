<?php

/**
 * This function will print the number of even and the number of odd numbers in the given array.
 * First, print the number of even numbers in the array.
 * Second, print the number of odd numbers in the array with new line.
 */
function evenOdd($arr)
{
    $even = 0;
    $odd = 0;
    foreach ($arr as $value) {
        if ($value % 2 == 0) {
            $even++;
        } else {
            $odd++;
        }
    }

    echo $even . "\n" . $odd;
}

// data sets
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr2 = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
$arr3 = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
evenOdd($arr1);
