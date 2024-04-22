<?php

include "../connect.php";

$userid = filterRequest("userid") ;
$itemid = filterRequest("itemid") ;


deleteData("favourite","favourite_user = $userid AND favourite_item = $itemid ");