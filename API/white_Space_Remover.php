<?php

header("Access-Control-Allow-Origin: *");

$string = $_GET["string"];

//Using trim function to remove white space
$new_string = trim($string);

$array = ["Originalstring" => $string, "FixedString" => $new_string];

$json = json_encode($array);
echo($json);
?>