<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
date_default_timezone_set('Asia/Colombo');
$time = date("h:i:s A");
$date = date("Y-m-d");
 $sql = "update orders set Status = 'Delivered', D_Date = '$date', D_Time = '$time' where Order_ID='$id'";
mysql_query( $sql);


 header("location: admin_order.php");
  
}

?>