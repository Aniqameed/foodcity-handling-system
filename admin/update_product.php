<?php
	include('../dbcon.php');
	session_start();
	$prodid = $_SESSION['proid'];
	$pname=$_POST['proname'];
	$desc=$_POST['prodes'];
	$price=$_POST['proprice'];
	$prodate=$_POST['prodate'];
	$img=$_FILES['image']['tmp_name'];
	$catid=$_POST['catid'];


	
	if(!isset($img) || $img == ""){
		mysqli_query($conn,"UPDATE product SET Name='$pname', Description='$desc', Price='$price', Cat_ID='$catid', Date='$prodate'  WHERE Product_ID='$prodid'");
		
		?>
		<SCRIPT>
			alert("Update Success");
				window.location = "admin_pro_update.php";
		</SCRIPT>
		<?php
	}
	else{
		if (!isset($_FILES['image']['tmp_name'])) {
			echo "Cannot Find Image";
			}else{
			$file=$_FILES['image']['tmp_name'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);

			$location=$_FILES["image"]["name"];
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			

			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);
		mysqli_query($conn,"UPDATE product SET Name='$pname', Description='$desc', Price='$price', Cat_ID='$catid', Date='$prodate', Imgurl = '$location'  WHERE Product_ID='$prodid'");
		?>
		<SCRIPT>
			alert("Update Success");
			window.location = "admin_pro_update.php";
		</SCRIPT>
		<?php
	}
	}}
	?>