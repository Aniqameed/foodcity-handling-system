<?php


include('dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from cart where Product_ID='$id'";
mysql_query( $sql);



 header("location: index.php");
  
}

?>