<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	include "connect.php";
	if(isset($_POST['delete8'])){
	if(empty($_POST["lcheck"])){
		echo '<script type="text/javascript">';
		echo 'setTimeout(function(){swal("No chosen lead to delete yet", "Please choose a lead to delete");}, 300);</script>';
		echo "<script>setTimeout('history.go(-1)',2000);</script>";	
		}
	elseif(isset($_POST["lcheck"])){
		
	$checked_arr = $_POST["lcheck"];
	$ctr= count($checked_arr);
	$del = "";
	for($x=0; $x<=$ctr-1; $x++){
			$del .= $checked_arr[$x];

			if($x<=$ctr-2){
				$del .= ", ";
			}
	}
	$sql = "DELETE FROM tbl_leads WHERE id IN (".$del.")";
		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Deleted!","Lead has been deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout('history.go(-1)',1500);</script>";
		} 
}}
	elseif(isset($_GET["id"])){
		$id = $_GET["id"];
		$sql = "DELETE FROM tbl_leads WHERE id='".$id."'";

		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Deleted!","Lead has been deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout('history.go(-2)',1500);</script>";
		} 
		else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);}
	?>