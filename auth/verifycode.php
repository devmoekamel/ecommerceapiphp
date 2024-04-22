<?php

include "../connect.php";

$code = filterRequest("code");
$email = filterRequest("email");


$query = $con->prepare("SELECT * FROM users WHERE users_email = ? AND users_verifycode = ? ");

$query->execute(array($email,$code));

$count=$query->rowCount();

if($count>0){
    $data=array("users_approve"=>1);

    updateData("users",$data," users_email = '$email' ");
    
}else{
    echo json_encode(array("status"=>"Wrong Verfication Code"));
}
