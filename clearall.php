<?php


include('dbcon.php');

{
session_start();

$valu = $_SESSION['ord'];
$cus = $_SESSION['cusid'];

 $sql = "delete from cart where Order_ID = '$valu' AND Cus_ID = '$cus'";
mysql_query( $sql);



 header("location: checkout.php");
  
}

?>