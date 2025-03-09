<?php
echo "Enter a Number:";
$number = (int) readline();

if ($number > 0) {
    echo "The number is postive. \n";
} elseif ($number < 0) {
    echo "Number is negative. \n";
} else {
    echo "The number is zero. \n";
}
