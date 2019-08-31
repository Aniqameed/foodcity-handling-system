<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ 

							?>
			<script>
			alert('Please Signin to Add to Cart');
			
				window.location = "index.php";
			</script>
			<?php			
									}
									else{

include('conn.php');
			$query=mysqli_query($conn,"select Order_ID from orders order by Order_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "ORD0001";
					$valu =$val;
					$_SESSION['ord'] = $valu;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Order_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "ORD".sprintf('%04s',$val);

					$valu = $val;
					$_SESSION['ord'] = $valu;
					
				}

				$query=mysqli_query($conn,"select Cart_ID from cart order by Cart_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$vala = "CRT0001";
					$valb =$vala;
					$_SESSION['crt'] = $valb;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$vala = $row['Cart_ID'];
					$vala = substr($vala, 3, 5);

					$vala = (int) $vala +1;
					$vala = "CRT".sprintf('%04s',$vala);

					$valb = $vala;
					$_SESSION['crt'] = $vala;
				}

	include('dbcon.php');

	

	$cusid = $_SESSION['cusid'];

	$crtid = $vala;

	$prodID = $_GET['id'];

	$orderid = $valu;


		$sqlSelectSpecProd = mysql_query("select * from product where Product_ID = '$prodID' ") or die(mysql_error());

		$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);

		$proname = $getProdInfo["Name"];

		$img = $proname = $getProdInfo["Imgurl"];

		$pri = $proname = $getProdInfo["Price"];

		$quan = 1;
	
		$Amount = ($quan * $getProdInfo["Price"]);

		$query = mysql_query("select * from cart where Order_ID = '$orderid' AND Product_ID = '$prodID' AND Cus_ID = '$cusid'")or die(mysql_error());
			$count = mysql_num_rows($query);

			if ($count > 0){ ?>
			<script>
			alert('You already added this Product');
			window.location = "categories.php?id=<?php echo $_SESSION['cateid']?>";
			
			</script>
			<?php
			}else{
				include('conn.php');
			$query=mysqli_query($conn,"select * from product where Product_ID = '$prodID'");
			$row=mysqli_fetch_assoc($query);

			$newquan = $row['Quantity'] - $quan;
		

		mysql_query("UPDATE product SET Quantity = '$newquan' WHERE Product_ID = '$prodID'")or die(mysql_error());

		mysql_query("INSERT INTO cart VALUES ('$crtid', '$orderid', '$prodID', '$proname', '$img', '$pri', '$quan', '$Amount', '$cusid')")or die(mysql_error());

		?>
			<script>
			alert('Product Added to Cart');
			window.location = "categories.php?id=<?php echo $_SESSION['cateid']?>";
			
			</script>
			<?php
		}
	}
?>