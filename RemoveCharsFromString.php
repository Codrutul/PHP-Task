<?php


function removeCharsFromString($string, $chars): string{
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