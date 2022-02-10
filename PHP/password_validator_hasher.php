<?php

header("Access-Control-Allow-Origin: *");

  $password = $_GET['password'];
  $isValid = false;
  
  //Hashing password
  $hashed_password = hash('sha256',$pass);

  //Validating Password
  if(preg_match('/[A-Za-z]/',$pass) && preg_match('/[0-9]/',$pass) && strlen($pass)>= 8){
    $isValid = true;
  }
  $array = ['password'=>$pass,'isValid'=>$isValid,'hashed_password'=>$hashed_password];
  echo json_encode($array);
 ?>

