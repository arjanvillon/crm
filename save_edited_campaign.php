<?php 
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	include "connect.php";
?>
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
	if(isset($_POST["edit4"])){
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
		
		$sql = "UPDATE tbl_campaign SET campaign_name_str='".$cname."', campaign_type_idr='".$ctype."', campaign_status_idr='".$cstatus."', start_date_dat='".$sdate."', end_date_dat='".$edate."', budgeted_cost_cur='".$bcost."', actual_cost_cur='".$acost."', active_bol='".$active."', drip_feed_bol='".$drip."', owner_idr='".$owner."' WHERE tbl_campaign.id=".$id."";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Campaign has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'campaign.php';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>
</body>
</html>