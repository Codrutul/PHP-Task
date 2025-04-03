<?php


function FibonacciSequenceGenerator(int $numberOfElements): array{
    // generates the first $numberOfElements elements of the Fibonacci sequence
    if ($numberOfElements === 0) {
        return [];
    }
    if ($numberOfElements === 1) {
        return [0];
    }
    if ($numberOfElements === 2) {
        return [0,1];
    }
    $fibonacciSequence = [0,1];
    for ($i = 2; $i < $numberOfElements; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2]; ;
    }

    return $fibonacciSequence;

}

function printSequence(): void{
    $number = $_POST["number"];
    $fibonacciSequence = FibonacciSequenceGenerator($number);
    foreach ($fibonacciSequence as $val) {
        echo $val . " ";
    }
}

printSequence();


