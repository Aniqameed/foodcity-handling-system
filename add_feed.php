<?php
include('conn.php');
			$query=mysqli_query($conn,"select F_ID from feedback order by F_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "FED0001";
					$valu =$val;
					$_SESSION['fed'] = $valu;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['F_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "FED".sprintf('%04s',$val);

					$valu = $val;
					$_SESSION['fed'] = $valu;
					
				}
include('dbcon.php');
		session_start();
			if (isset($_POST['save'])){
			$id = $valu;
			$cus_id=$_SESSION['cusid'];
			$pro_ID=$_SESSION['pr'];
			$mes=$_POST['message'];
			$date = date("Y-m-d");
			date_default_timezone_set('Asia/Colombo');
			$time = date("h:i:s A");
			
									 

			

			mysqli_query($conn,"INSERT INTO feedback VALUES ('$id', '$cus_id', '$pro_ID', '$mes', '$date', '$time')");


			
			?>
			<script>
			alert('Feedback Sent Successfully');
			window.location = "single.php?id=<?php echo $pro_ID; ?>";
			
			</script>
			<?php

	
} ?>