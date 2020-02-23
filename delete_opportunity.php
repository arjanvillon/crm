<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	include "connect.php";
	if(isset($_POST['delete3'])){
		if(empty($_POST["ocheck"])){
		echo '<script type="text/javascript">';
		echo 'setTimeout(function(){swal("No chosen opportunity to delete yet", "Please choose an opportunity to delete");}, 300);</script>';
		echo "<script>setTimeout('history.go(-1)',2000);</script>";	
		}
	elseif(isset($_POST["ocheck"])){
	$checked_arr = $_POST["ocheck"];
	$ctr= count($checked_arr);
	$del = "";
	for($x=0; $x<=$ctr-1; $x++){
			$del .= $checked_arr[$x];

			if($x<=$ctr-2){
				$del .= ", ";
			}
	}	
	$sql = "DELETE FROM tbl_opportunities WHERE id IN (".$del.")";
		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Deleted!","Opportunity/ies has been deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout('history.go(-1)',1500);</script>";
		} 
}}
	elseif(isset($_GET["id"])){
		$id = $_GET["id"];
		$sql = "DELETE FROM tbl_opportunities WHERE id='".$id."'";

		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Deleted!","Opportunity has been deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'opportunities.php';\",1500);</script>";
		} 
		else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);}
	?>
