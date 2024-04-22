<?php

include "../connect.php";

$userid = filterRequest("userid") ;


getAllData("myfav","favourite_user = $userid")  ;
