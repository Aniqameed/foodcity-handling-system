<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from stock where Stock_ID='$id'";
mysql_query( $sql);



 header("location: admin_stock.php");
  
}

?>