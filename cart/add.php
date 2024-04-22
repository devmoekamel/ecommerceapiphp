<?php


include "../connect.php";


$usersid = filterRequest("userid");
$itemsid = filterRequest("itemid");


  getData("cart", "cart_item = $itemsid AND cart_user  = $usersid " ,null  , false );


$data = array(
    "cart_user" =>  $usersid,
    "cart_item" =>  $itemsid
);

insertData("cart", $data);
 