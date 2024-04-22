<?php

include "../connect.php";

$email = filterRequest("email");
$pass = filterRequest("password");
$pas = sha1($pass);


$query = $con->prepare("SELECT * FROM users WHERE users_email = ? AND users_passowrd = ? ");

$query->execute(array($email,$pass));
$data = $query->fetchAll(PDO::FETCH_ASSOC);
$count=$query->rowCount();

if($count>0){
    
    echo json_encode(array("status"=>"success","data"=>$data));
    
    
}else{
    echo json_encode(array("status"=>"failure"));
}
