<?php
include('../dbcon.php');
	
	session_start();

	if (!isset($_FILES['image']['tmp_name'])) {
	echo "Cannot Find Image";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);
			
			$pid=$_SESSION['proid'];
			$pname=$_POST['proname'];
			$price=$_POST['proprice'];
			$des=$_POST['prodes'];
			$catid=$_POST['catid'];
			$admin = $_SESSION['id1'];
			$date=$_POST['prodate'];
			$location=$_FILES["image"]["name"];

			$query = mysqli_query($conn,"select * from categories where Cat_ID = '$catid'")or die(mysqli_error($conn));
			$count = mysqli_num_rows($query);

			if ($count > 0) 
				{
					mysqli_query($conn,"INSERT INTO product VALUES ('$pid', '$pname', '0', '$price', '$des', '$admin', '$catid', '$date', '$location')")or die(mysqli_error($conn));
					?>
					<script>
					alert('Register Success');
					window.location = "admin_pro_add.php";
					
					</script><?php
					exit();
		
				}

			else{
				?>
					<script>
					alert('Category ID Not Found');
					window.location = "admin_pro_add.php";
					
					</script><?php	
			}
			}
	}


?>
