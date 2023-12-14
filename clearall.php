<?php


include('dbcon.php');

{
session_start();

$valu = $_SESSION['ord'];
$cus = $_SESSION['cusid'];

 $sql = "delete from cart where Order_ID = '$valu' AND Cus_ID = '$cus'";
mysqli_query( $conn,$sql);



 header("location: checkout.php");
  
}

?>