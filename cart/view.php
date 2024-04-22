<?php

include "../connect.php";

$userid = filterRequest("userid");

$data  = getAllData("cartview", "cart_user = $userid", null, false);

$stmt = $con->prepare("SELECT SUM(itemsprice) as totalprice , count(itemscount) as totalcount FROM cartview  
WHERE  cartview.cart_user =  $userid 
GROUP BY cart_user  ");

$stmt->execute();


$datacountprice = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(array(
    "status" => "success",
    "countprice" =>  $datacountprice,
    "datacart" => $data,
));
