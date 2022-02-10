<?php

header("Access-Control-Allow-Origin: *");

#Initial string
$string = $_GET["string"];

#Reversed string
$reverse_string = strrev($string);

#Validating and checking
function isPalindrome($string){
    if(strlen($string) >= 2){
        if ($string == $reverse_string){
            return true;
        }else
            return false;
        }else return "input a valid string";
        
}

#Storing in array and posting Json
$array = ["string" => $string, "result" => isPalindrome($string)];
echo json_encode($array) ;
?>

