<?php

include "../connect.php";

$catid = filterRequest("catid");
$userid = filterRequest("userid");

$stmt = $con->prepare("SELECT itemsview.* ,1 as favourite ,(items_price - (items_price * items_discount / 100)) as finalprice from itemsview
INNER JOIN favourite 
on favourite.favourite_item = itemsview.items_id AND favourite.favourite_user = $userid
WHERE itemsview.categories_id = $catid
UNION ALL
SELECT itemsview.* , 0 as favourite ,(items_price - (items_price * items_discount / 100)) as finalprice from itemsview
WHERE itemsview.categories_id = $catid AND items_id NOT IN 
(SELECT itemsview.items_id FROM itemsview
INNER JOIN favourite 
on favourite.favourite_item = itemsview.items_id AND favourite.favourite_user = $userid
)");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0){
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}   
