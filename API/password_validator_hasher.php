<?php

header("Access-Control-Allow-Origin: *");

  $password = $_GET["password"];
  $isValid = false;
  
  //Hashing password
  $hashed_password = hash("sha256",$password);

  //Validating Password
  if(preg_match('/[A-Za-z]/',$password) && preg_match('/[0-9]/',$password) && strlen($password)>= 8){
    $isValid = true;
  }
  $array = ["password"=>$password,"isValid"=>$isValid,"hashed_password"=>$hashed_password];
  echo json_encode($array);
 ?>

