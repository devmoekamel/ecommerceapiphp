<?php 

 include "../connect.php" ; 

 $usersid = filterRequest("userid") ; 
 $itemsid = filterRequest("itemid") ; 

 $stmt = $con->prepare("SELECT COUNT(cart.cart_id) as countitems  FROM cart WHERE cart_user = $usersid AND cart_item  =  $itemsid ");
 $stmt->execute() ; 

 $count = $stmt->rowCount() ; 

 $data = $stmt->fetchColumn() ; 
 

  if ($count > 0 ){
    
    echo json_encode(array("status" => "success" , "data" => $data)) ; 

  } else {

    echo json_encode(array("status" => "success" , "data" => "0")) ; 

  }


?>