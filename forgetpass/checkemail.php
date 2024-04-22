<?php

include "../connect.php";

$email = filterRequest("email");

$verifycode = 55555;

$query = $con->prepare("SELECT * FROM users WHERE users_email = ? ");

$query->execute(array($email));

$count=$query->rowCount();

if($count>0){
    // send mail with the generated verifcation code 
    // sendmail()
    // image it's 5555
    $data = array("users_verifycode"=>$verifycode);
    updateData('users',$data," users_email = '$email' ",false);
    echo json_encode(array("status"=>"success"));
   
    
}else{
    echo json_encode(array("status"=>"failure"));
}

