<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from supplier where Supplier_ID='$id'";
mysqli_query($conn, $sql);



 header("location: admin_supplier.php");
  
}

?>