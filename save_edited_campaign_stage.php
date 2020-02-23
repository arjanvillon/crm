<?php 
	if(isset($_GET["id"])){
		$id = $_GET["id"];	
	}
	include "connect.php";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
	if(isset($_POST["edit7"])){
		$csname = $_POST["csname"];
		$csorder = $_POST["csorder"];
		$csstatus = $_POST["csstatus"];
		$dastatus = $_POST["dastatus"];
		$csemail = $_POST["csemail"];
		$csnotes = $_POST["csnotes"];
			
		$sql = "UPDATE tbl_campaign_stage SET campaign_stage_name_str='".$csname."', campaign_stage_order_str='".$csorder."', campaign_stage_status_idr='".$csstatus."', default_activity_status_idr='".$dastatus."', cs_email_eml='".$csemail."', csnotes_lng='".$csnotes."' WHERE tbl_campaign_stage.id=".$id."";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Campaign Stage has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout('history.go(-2)',1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	?>