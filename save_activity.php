<!doctype html>
<?php 
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	include "connect.php";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
	if(isset($_POST["save6"])){
		$adate = $_POST["adate"];
		if(isset($_POST["allday"])){					
			$allday= 1;
		}
		else{
			$allday=0;
		}
		$atype= $_POST["atype"];
		$adescription= $_POST["adescription"];


		$sql = "INSERT INTO tbl_activity (account_id, adate_dat, allday_bol, atype_idr, adescription_lng) VALUES ('".$id."','".$adate."','".$allday."','".$atype."','".$adescription."')";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New activity created successfully!","success");';
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