<?php 

include '../connect.php';

$table = "address";

$usersid    = filterRequest("userid");
$name       = filterRequest("name");
$city       = filterRequest("city");
$street     = filterRequest("street");
$lat        = filterRequest("lat");
$long       = filterRequest("long");

$data = array(  
"address_city" => $city,
"address_user" => $usersid,
"address_name"   => $name,
"address_street" => $street,
"address_lat" => $lat,
"address_long" => $long,
);

insertData($table , $data);