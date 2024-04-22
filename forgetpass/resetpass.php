<?php

include "../connect.php";

$email = filterRequest("email");
$pass = filterRequest("password");

$data = array("users_passowrd"=>$pass);
updateData('users',$data,"users_email ='$email'",);





