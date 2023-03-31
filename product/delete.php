<?php
include "../connect.php";

$id_p=filterRequest("id_p");

// $stmt = $con->prepare("
// DELETE FROME product WHERE id_p = ?
// ");
$stmt = $con->prepare("
DELETE FROM product WHERE `product`.`id_p` = ?
");
$stmt->execute(array($id_p));
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("satatus"=>"success"));
}
else{
    echo json_encode(array("status"=>"fail"));
}


?>