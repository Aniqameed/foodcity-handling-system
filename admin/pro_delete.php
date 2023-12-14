<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from product where Product_ID='$id'";
mysqli_query($conn, $sql);



 header("location: admin_product.php");
  
}

?>