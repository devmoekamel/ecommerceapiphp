<?php 

include "../connect.php" ; 

$usersid = filterRequest("userid");
$itemsid = filterRequest("itemid");

deleteData("cart" , "cart_id  = (SELECT cart_id  FROM cart WHERE cart_user = $usersid AND cart_item = $itemsid  LIMIT 1) "); 