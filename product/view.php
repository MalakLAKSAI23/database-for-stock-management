<?php
include "../connect.php";
$user_p =filterRequest("user_p");
$stmt=$con->prepare("SELECT * FROM `product` WHERE `user_p` =? ");


$stmt->execute(array($user_p));
$data =$stmt->fetch(PDO::FETCH_ASSOC);
$count =$stmt->rowCount();
if($count > 0){
    echo json_encode(array("satatus"=>"success","data" =>$data));
}
else{
    echo json_encode(array("status"=>"fail"));
}
?>