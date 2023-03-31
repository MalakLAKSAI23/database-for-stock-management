<?php
include "../connect.php";

$email=filterRequest("email");

$password=filterRequest("password");

$stmt = $con->prepare("SELECT * FROM user WHERE `password` = ? AND email = ? ");
$stmt->execute(array($password,$email));
$data =$stmt->fetch(PDO :: FETCH_ASSOC);
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("satatus"=>"fail","data" =>$data));
}
else{
    echo json_encode(array("status"=>"success"));
}


?>