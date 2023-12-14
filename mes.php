<?php
include('conn.php');
			$query=mysqli_query($conn,"select Chat_ID from chat order by Chat_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "CHT0001";
					$valu =$val;
					$_SESSION['cht'] = $valu;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Chat_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "CHT".sprintf('%04s',$val);

					$valu = $val;
					$_SESSION['cht'] = $valu;
					
				}
include('dbcon.php');

			if (isset($_POST['save'])){

				$name = $_POST['cname'];
				$subject = $_POST['subject'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$date = date("Y-m-d");
				date_default_timezone_set('Asia/Colombo');
				$time = date("h:i:s A");

			mysqli_query($conn,"INSERT INTO chat (Chat_ID, Name, Subject, Mail, Message, Date, Time, Type, To_Status) VALUES ('$valu', '$name', '$subject', '$email', '$message', '$date', '$time', 'contact', 'Not Read')");

			session_start();
			$_SESSION['cont'] = "Mail Sent Successfully.. We Will Reply Soon";
			
		}?>
		<SCRIPT>
			window.location = "contact.php";
		</SCRIPT>


	

	
