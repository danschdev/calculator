<?php

require_once 'calculator.php';

function runTests() {
    $success = true;
    $success &= assert(calculate("1+1") == 2, "Test '1+1' failed");
    $success &= assert(calculate("7-3") == 4, "Test '7-3' failed");
    if ($success) echo "All tests succeeded";
}

runTests();