<?php

function calculate(string $term) {
    $sum = 0;
    if ($term[0] == "-" || $term[0] == '+') {
        $term = "0" . $term;
    }
    $term = str_replace("-","+-", $term);
    $summands = explode("+", $term);
    foreach($summands as $summand) {
        if ($summand[0] == "-") {
            $sum -= substr($summand, 1);
        } else {
            $sum += $summand;
        }
    }
    return $sum;
}