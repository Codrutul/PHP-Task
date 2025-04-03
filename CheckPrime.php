<?php

function checkPrime($number): bool{
    if ($number < 4) {
        return true;
    }
    for( $i =2 ; $i*$i < $number ; $i++ ){
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function displayIfPrime(): void{
    $number = $_POST["numberToCheck"];
    if (checkPrime($number)) {
        echo "The number is prime";
    }
    else {
        echo "The number is not prime";
    }
}

displayIfPrime();
