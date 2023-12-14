<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from customer where Customer_ID='$id'";
mysqli_query( $conn,$sql);



 header("location: admin_customer.php");
  
}

?>