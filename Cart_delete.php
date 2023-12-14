<?php


include('dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from cart where Product_ID='$id'";
mysqli_query( $conn,$sql);



 header("location: index.php");
  
}

?>