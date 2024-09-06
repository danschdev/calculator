<?php

require_once 'calculator.php';

function runAdditionTests() {
    $success = true;
    $success &= assert(calculate("54*2") == 54*2, "Test 54*2 failed");
    $success &= assert(calculate("1+1") == 2, "Test '1+1' failed");
    $success &= assert(calculate("7-3") == 4, "Test '7-3' failed");
//    $success &= assert(calculate("1+4-3") == 2, "Test '1+4-3' failed");
//    $success &= assert(calculate("5") == 5, "Test '5' failed");
    $success &= assert(calculate("0-17") == -17, "Test '0-17' failed");
//    $success &= assert(calculate("-13") == -13, "Test '-13' failed");
//    $success &= assert(calculate("+2") == 2, "Test '+2' failed");
    if ($success) echo "All addition tests succeeded<br/>";
}

function runMultiplicationTests() {
    $success = true;
    $success &= assert(calculate("3*3") == 9, "Test '3*3' failed");
    $success &= assert(calculate("56/7") == 56/7, "Test '56/7' failed");
    if ($success) echo "All multiplication tests succeeded<br/>";
}

runAdditionTests();
runMultiplicationTests();