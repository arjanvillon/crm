<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>

<?php 
		include "connect.php";
		if(isset($_POST["save4"])){
		$cname= $_POST["cname"];
		$ctype= $_POST["ctype"];
		$cstatus= $_POST["cstatus"];
		$bcost= $_POST["bcost"];
		$acost= $_POST["acost"];
		$sdate= $_POST["sdate"];
		$edate= $_POST["edate"];
		
		if(isset($_POST["active"])){					
			$active= 1;
		}
		else{
			$active=0;
		}
		if(isset($_POST["drip"])){					
			$drip= 1;
		}
		else{
			$drip=0;
		}
		$owner=$_POST["owner"];

		$sql = "INSERT INTO tbl_campaign (campaign_name_str, campaign_type_idr, campaign_status_idr, start_date_dat, end_date_dat, budgeted_cost_cur, actual_cost_cur, active_bol, drip_feed_bol, owner_idr) VALUES ('".$cname."', '".$ctype."','".$cstatus."','".$sdate."','".$edate."','".$bcost."','".$acost."','".$active."','".$drip."','".$owner."')";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New campaign created successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout('history.go(-2)',1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>
</body>
</html>