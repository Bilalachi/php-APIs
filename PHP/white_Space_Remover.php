<?php

header("Access-Control-Allow-Origin: *");

$string = $_GET["string"];

//Using trim function to remove white space
$new_string = trim($string);

$array = ["Original string" => $string, "Fixed String" => $new_string];

$json = json_encode($array);
echo($json);
?>