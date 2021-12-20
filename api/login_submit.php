<?php
session_start();
require ("../db/db_connect.php");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);
//if error in query run
if (!$result) {
     $response = array("success" => false, "message" => "Something went wrong!");
     echo json_encode($response);
     return;
}

$row = mysqli_fetch_assoc($result);
if($row){
     $_SESSION['user_id'] = $row['id'];
     $_SESSION['name'] = $row['full_name'];
     
     $response = array("success" => true, "message"=>"You logged in successfully!");
     echo json_encode($response);
     return;
}
else{
     $response = array("success" => false, "message"=>"You have entered incorrect email or password!");
     echo json_encode($response);
     return;
}

mysqli_close($conn);


 