<?php
include "../connect.php";

$name_p=filterRequest("name_p");
$description_p=filterRequest("description_p");
$quantite_p=filterRequest("quantite_p");
$min_p=filterRequest("min_p");
$price_p=filterRequest("price_p");
$supplier_p=filterRequest("supplier_p");
$user_p=filterRequest("user_p");


$stmt = $con->prepare("
INSERT INTO `product` (`name_p`, `description_p`,`quantite_p`,`min_p`,`price_p`,`supplier_p`,`user_p`)
VALUES (?, ?,?,?,?,?,?)
");
$stmt->execute(array($name_p,$description_p,$quantite_p,$min_p,$price_p,$supplier_p,$user_p));
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("satatus"=>"success"));
}
else{
    echo json_encode(array("status"=>"fail"));
}


?>