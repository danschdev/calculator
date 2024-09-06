<?php

function calculate(string $term) {
    $sum = 0;
    $summands = explode("+", $term);
    foreach($summands as $summand) {
        $sum += $summand;
    }
    return $sum;
}