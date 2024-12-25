<?php

/*
 * Complete the 'timeConversion' function below.
 * 
 * Problem URL: https://www.hackerrank.com/challenges/time-conversion/problem/
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s)
{
    return date_format(date_create($s), 'H:i:s');
}

// data sets
echo timeConversion('07:05:45') . "\n";
echo timeConversion('05:05:45PM') . "\n";
echo timeConversion('12:05:45AM') . "\n";
