<?php

include "../connect.php";

$userid = filterRequest("userid") ;
$itemid = filterRequest("itemid") ;


$data = array("favourite_user"=>$userid ,
              "favourite_item"=>$itemid);

insertData("favourite",$data);