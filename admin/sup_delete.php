<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from supplier where Supplier_ID='$id'";
mysql_query( $sql);



 header("location: admin_supplier.php");
  
}

?>