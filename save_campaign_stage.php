<?php 
	if(isset($_GET["id"])){
		$id = $_GET["id"];	
	}
	include "connect.php";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
	if(isset($_POST["save7"])){
		$csname = $_POST["csname"];
		$csorder = $_POST["csorder"];
		$csstatus = $_POST["csstatus"];
		$dastatus = $_POST["dastatus"];
		$csemail = $_POST["csemail"];
		$csnotes = $_POST["csnotes"];
		
		$sql = "INSERT INTO tbl_campaign_stage (cs_id, campaign_stage_name_str, campaign_stage_order_str, campaign_stage_status_idr, default_activity_status_idr, cs_email_eml, csnotes_lng) VALUES ('".$id."','".$csname."','".$csorder."','".$csstatus."','".$dastatus."','".$csemail."','".$csnotes."')";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New task created successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout('history.go(-2)',1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	?>