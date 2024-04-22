<?php 

include "../connect.php";

$username=filterRequest("username");
$email = filterRequest("email");
$phone = filterRequest("phone");
$pass = filterRequest("password");
$pas = sha1($pass);
// $verifycode = rand(10000,99999);
$verifycode = 33333;

// $approve = filterRequest("approve");

$query = $con->prepare("SELECT * FROM `users` Where `users_email`= ? OR `users_phone` = ? ");
$query->execute(array($email,$phone));
$count = $query->rowCount();

$data = array(
"users_name"=>$username,
"users_email"=>$email,
"users_phone"=>$phone,
"users_verifycode"=>$verifycode,
"users_passowrd"=>$pass,  );

if($count>0)
{
    echo json_encode(array("status"=>"fails"));
}else{
    // sendemail($email,"Ecommerce Verfication Code","Your Verfication Code is $verifycode" );
    insertData("users",$data);
}



