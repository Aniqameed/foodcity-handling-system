<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from customer where Customer_ID='$id'";
mysql_query( $sql);



 header("location: admin_customer.php");
  
}

?>