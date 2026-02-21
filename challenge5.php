<?php
$year = 2024;

// A year is a leap year if:
// 1. It is divisible by 400 OR
// 2. It is divisible by 4 AND NOT divisible by 100
if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}
?>