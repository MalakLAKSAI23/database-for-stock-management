<?php
include "../connect.php";
$id_p=filterRequest("id_p");
$name_p=filterRequest("name_p");
$description_p=filterRequest("description_p");
$quantite_p=filterRequest("quantite_p");
$min_p=filterRequest("min_p");
$price_p=filterRequest("price_p");
$supplier_p=filterRequest("supplier_p");


$stmt = $con->prepare("
UPDATE `product` SET `name_p` = ?, `description_p` = ?, `quantite_p` = ?, `min_p` = ?, `price_p` = ?,`supplier_p`=? WHERE id_p = ?;
");
$stmt->execute(array($name_p,$description_p,$quantite_p,$min_p,$price_p,$supplier_p,$id_p));
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("satatus"=>"success"));
}
else{
    echo json_encode(array("status"=>"fail"));
}


?>