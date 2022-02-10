<?php

header("Access-Control-Allow-Origin: *");

#Initial string
$string = $_GET["string"];


#Validating and checking
function isPalindrome($string){
    if(strlen($string) <= 2){
        return "Input a valid string";
    } else if ($string == strrev($string) && strlen($string) > 2) {
        return true;
    } else return false;

}
#Storing in array and posting Json
$array = ["string" => $string, "reversed" => strrev($string), "result" => isPalindrome($string)];
echo json_encode($array);
?>

