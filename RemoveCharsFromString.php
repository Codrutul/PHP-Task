<?php


function removeCharsFromString($string, $chars): string{
    // removes all the characters of $chars from $string
    for($i = 0; $i < strlen($chars); $i++){
        $string = str_replace($chars[$i], "", $string);
    }
    return $string;
}

function printResultedString(): void{
    $string = $_POST["string"];
    $chars = $_POST["specialCharacters"];

    echo removeCharsFromString($string, $chars);
}

printResultedString();