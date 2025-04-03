<?php

function quickSort($array): array {
    if (count($array) < 2) {
        return $array;
    }

    $pivot = $array[0];
    $left = [];
    $right = [];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] <= $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

function mergeSort($array): array {
    if (count($array) <= 1) return $array;

    $middle = floor(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    return merge(mergeSort($left), mergeSort($right));
}

function merge($left, $right): array {
    $result = [];

    while (count($left) && count($right)) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

function bubbleSort($array): array {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

function combSort($array):array {
    $gap = count($array);
    $shrink = 1.3;
    $sorted = false;

    while (!$sorted) {
        $gap = floor($gap / $shrink);
        if ($gap <= 1) {
            $gap = 1;
            $sorted = true;
        }

        for ($i = 0; $i + $gap < count($array); $i++) {
            if ($array[$i] > $array[$i + $gap]) {
                $temp = $array[$i];
                $array[$i] = $array[$i + $gap];
                $array[$i + $gap] = $temp;
                $sorted = false;
            }
        }
    }

    return $array;
}

function bogoSort($array): array {
    while (!isSorted($array)) {
        shuffle($array);
    }
    return $array;
}

function isSorted($array): bool {
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            return false;
        }
    }
    return true;
}




function sortAndPrintArray(): void {
    $inputString = $_POST['numbers'];
    $arrayToBeSorted = array_map('intval', explode(' ', trim($inputString)));
    $arrayToBeSorted = array_filter($arrayToBeSorted);

    $selectedAlgorithm = $_POST['sortingAlgorithms'];
    
    echo "<p>Selected algorithm: " . $selectedAlgorithm . "Sort</p>";

    $arrayToBePrinted = match ($selectedAlgorithm) {
        'comb' => combSort($arrayToBeSorted),
        'merge' => mergeSort($arrayToBeSorted),
        'bubble' => bubbleSort($arrayToBeSorted),
        'bogo' => bogoSort($arrayToBeSorted),
        default => quickSort($arrayToBeSorted),
    };

    
    echo "<p>Sorted array: ";
    foreach ($arrayToBePrinted as $value) {
        echo $value . " ";
    }
    echo "</p>";
}

sortAndPrintArray();
