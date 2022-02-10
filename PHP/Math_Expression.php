<?php
header("Access-Control-Allow-Origin: *");

$x = $_GET["x"];
$y = $_GET["y"];

$expression = "2 * $x + $y % 2"; //Showing the expression
$solution = 2 * $x + $y % 2; //Solving the expression

$array = ["expression" => $expression, "solution" => $solution];
echo json_encode($array) ;

?>
