<?php
include "../connect.php";

$email=filterRequest("email");
$password=filterRequest("password");

$stmt = $con->prepare("
INSERT INTO `user` (`email`, `password`)
VALUES (?, ?)
");
$stmt->execute(array($email,$password));
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("satatus"=>"success"));
}
else{
    echo json_encode(array("status"=>"fail"));
}


?>