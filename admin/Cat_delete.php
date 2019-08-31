<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from categories where Cat_ID='$id'";
mysql_query( $sql);



 header("location: admin_category.php");
  
}

?>