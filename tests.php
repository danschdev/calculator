<?php

require_once 'calculator.php';

function runTests() {
    $success = true;
    $success &= assert(calculate("1+1") == 2, "Test '1+1' failed");
    $success &= assert(calculate("7-3") == 4, "Test '7-3' failed");
    $success &= assert(calculate("1+4-3") == 2, "Test '1+4-3' failed");
    $success &= assert(calculate("5") == 5, "Test '5' failed");
    $success &= assert(calculate("0-17") == -17, "Test '0-17' failed");
    $success &= assert(calculate("-13") == -13, "Test '-13' failed");
    $success &= assert(calculate("+2") == 2, "Test '+2' failed");
    if ($success) echo "All tests succeeded";
}

runTests();