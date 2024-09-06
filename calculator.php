<?php

function calculate(string $term) {
    $result = 0;

    $number = "";
    $index = 0;
    while (strlen($term) > $index && is_numeric($term[$index])) {
        $number .= $term[$index];
        $index++;
    } 

    $result = $number;

    $operator = $term[$index];

    $number = "";
    $index = 0;
    
    $term = explode($operator, $term)[1];

    while (strlen($term) > $index && is_numeric($term[$index])) {
        $number .= $term[$index];
        $index++;
    } 

    switch ($operator) {
        case "+": $result += $number; break;
        case "-": $result -= $number; break;
        case "*": $result *= $number; break;
        case "/": $result /= $number; break;
    }


    return $result;
}