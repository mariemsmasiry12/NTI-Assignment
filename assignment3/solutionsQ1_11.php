<?php
/* ------------------------------------------------------------
   1) if / else  -> check user age to approve login
------------------------------------------------------------ */
echo "<h3>1) Age Check</h3>";

$age = 20;

if ($age >= 18) {
    echo "You are allowed to login <br>";
} else {
    echo "You are NOT allowed to login <br>";
}


/* ------------------------------------------------------------
   2) function -> takes 2 numbers, prints product, difference, quotient
------------------------------------------------------------ */
echo "<h3>2) Function with 2 numbers</h3>";

function calcTwoNumbers($a, $b)
{
    $product = $a * $b;
    $diff    = $a - $b;
    $quotient = $b != 0 ? $a / $b : "undefined (division by zero)";

    echo "Product: $product <br>";
    echo "Difference: $diff <br>";
    echo "Quotient: $quotient <br>";
}

calcTwoNumbers(10, 5);


/* ------------------------------------------------------------
   3) function with array -> returns sum of array elements
------------------------------------------------------------ */
echo "<h3>3) Sum of array</h3>";

function sumArray($arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

$numbers = [4, 5, 8, 6, 9];
echo "Sum: " . sumArray($numbers) . "<br>";


/* ------------------------------------------------------------
   4) search -> look for a film in array, print yes/no,
      break out of the loop as soon as it's found
------------------------------------------------------------ */
echo "<h3>4) Search for a film</h3>";

$films   = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "avatar";

$found = "no";

foreach ($films as $film) {
    if (strtolower($film) == strtolower($keyword)) {
        $found = "yes";
        break;
    }
}

echo $found . "<br>";


/* ------------------------------------------------------------
   5) RouteBubble -> bubble sort function
      (https://www.w3schools.in/data-structures-tutorial/sorting-techniques/bubble-sort-algorithm)
------------------------------------------------------------ */
echo "<h3>5) RouteBubble (Bubble Sort)</h3>";

function RouteBubble($arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // swap
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$unsorted = [6, 4, 9, 3, 12, 8, 7];
$sortedByBubble = RouteBubble($unsorted);
echo implode(" ", $sortedByBubble) . "<br>";


/* ------------------------------------------------------------
   6) max -> get the biggest number in an array
------------------------------------------------------------ */
echo "<h3>6) Max number in array</h3>";

function getMax($arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

$tests = array(5, 4, 9, 3, 1, 7, 5, 8, 6);
echo "Max: " . getMax($tests) . "<br>";
// Built-in alternative: echo max($tests);


/* ------------------------------------------------------------
   7) counting -> how many times a film is repeated
------------------------------------------------------------ */
echo "<h3>7) Counting repeated film</h3>";

$films2  = array("avatar", "Prestige", "avatar", "Prestige");
$keyword2 = "avatar";

$count = 0;
foreach ($films2 as $film) {
    if (strtolower($film) == strtolower($keyword2)) {
        $count++;
    }
}

echo $count . "<br>";
// Built-in alternative:
// $counts = array_count_values($films2);
// echo $counts[$keyword2];


/* ------------------------------------------------------------
   8) RouteRandomPass -> returns a random string of $length chars
      (https://www.geeksforgeeks.org/generating-random-string-using-php)
------------------------------------------------------------ */
echo "<h3>8) RouteRandomPass</h3>";

function RouteRandomPass($length)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

echo RouteRandomPass(10) . "<br>";


/* ------------------------------------------------------------
   9) Boolean -> show Yes/No for every item that is a boolean
      (once with foreach, once with while)
------------------------------------------------------------ */
echo "<h3>9) Boolean check</h3>";

$tests9 = array(1, "tariq", 1.5, true, 7, 's', false);

echo "-- foreach version --<br>";
foreach ($tests9 as $item) {
    echo is_bool($item) ? "Yes <br>" : "No <br>";
}

echo "-- while version --<br>";
$i = 0;
while ($i < count($tests9)) {
    echo is_bool($tests9[$i]) ? "Yes <br>" : "No <br>";
    $i++;
}


/* ------------------------------------------------------------
   10) sorting -> sort an array ascending
------------------------------------------------------------ */
echo "<h3>10) Sorting</h3>";

$tests10 = array(6, 4, 9, 3, 12, 8, 7);
sort($tests10); // built-in ascending sort
echo implode(" ", $tests10) . "<br>";
// Or reuse our own function: echo implode(" ", RouteBubble($tests10));


/* ------------------------------------------------------------
   11) same values -> intersection of two arrays
------------------------------------------------------------ */
echo "<h3>11) Same values (intersection)</h3>";

$arr1 = array('a', 'b', 'c', 'd');
$arr2 = array('c', 'd', 'e', 'f');

$common = [];
foreach ($arr1 as $val1) {
    foreach ($arr2 as $val2) {
        if ($val1 == $val2) {
            $common[] = $val1;
        }
    }
}

echo implode(" - ", $common) . "<br>";
// Built-in alternative: echo implode(" - ", array_intersect($arr1, $arr2));
