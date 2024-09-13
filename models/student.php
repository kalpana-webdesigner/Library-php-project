<?php

include_once('../config/config.php');
include_once('../config/database.php');


//function - studentData store
function studentData($conn , $pram){
    extract($pram);
    //validation start
    if(empty($name)){
       $result = ['error'=>"Name is required"];
       return $result;
    }
    else if(empty($email)){
        $result = ['error' => "Email id is required"];
        return $result;
    }
    else if(IsEmailUnique($conn, $email)){
        $result = ['error' => "Email is already exits"];
        return $result;
    }
    else if(empty($phone_no)){
        $result = ['error'=>"Phone no is required"];
        return $result;
    }
    else if(IsPhonenoUnique($conn, $phone_no)){
        $result = ['error' => "Phone no is already exits"];
        return $result;
    }
    else if(empty($address)){
        $result = ['error' => "Please enter the address"];
    }
//validation end

    $datetime = date("Y-m-d H:i:s");
   $sql = "INSERT INTO students(name,phone_no,email,address, created_at) 
    VALUES ('$name','$phone_no','$email','$address', '$datetime')"; 
   
$res['successMessage'] = $conn->query($sql);
  return $res;
}

//Function to check email is unique
function IsEmailUnique($conn, $email, $id = Null)
{
  $sql = "SELECT id FROM students WHERE email = '$email'";
  if ($id) {
    $sql .= " and id != $id";
  }
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
    return true;
  else return false;
}

//Function to check the phone no unique
function IsPhonenoUnique($conn, $phone_no, $id = Null){
  $sql = "SELECT id FROM students WHERE phone_no = '$phone_no'";
  if($id){
    $sql .= " and id != $id";
  }
 $result = $conn->query($sql);
 if($result->num_rows > 0){
    return true;
 }else{
    return false;
 }
}
 
//function fetch the student data 
function showData($conn){
 $sql = "SELECT *FROM students";
 $result = $conn->query($sql);
 return $result;
}

