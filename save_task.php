
<?php 
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	include "connect.php";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
	if(isset($_POST["save5"])){
		$tdate= $_POST["tdate"];
		if(isset($_POST["allday_task"])){					
			$allday_task= 1;
		}
		else{
			$allday_task=0;
		}
		$priority= $_POST["priority"];
		$tstatus= $_POST["tstatus"];
		$ttype= $_POST["ttype"];
		$towner= $_POST["towner"];
		$tdescription= $_POST["tdescription"];
		

		
		$sql = "INSERT INTO tbl_tasks (account_idr, task_date_dat, allday_task_bol, priority_idr, task_status_idr, task_type_idr, owner_idr, description_lng) VALUES ('".$id."','".$tdate."','".$allday_task."','".$priority."','".$tstatus."','".$ttype."','".$towner."','".$tdescription."')";
		
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