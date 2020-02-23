<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	include "connect.php";
	if(isset($_POST['delete2'])){
		if(empty($_POST["ccheck"])){
		echo '<script type="text/javascript">';
		echo 'setTimeout(function(){swal("No chosen contact to delete yet", "Please choose a contact to delete");}, 300);</script>';
		echo "<script>setTimeout('history.go(-1)',2000);</script>";	
		}
	elseif(isset($_POST["ccheck"])){
	$checked_arr = $_POST["ccheck"];
	$ctr= count($checked_arr);
	$del = "";
	for($x=0; $x<=$ctr-1; $x++){
			$del .= $checked_arr[$x];

			if($x<=$ctr-2){
				$del .= ", ";
			}
	}
	$sql = "DELETE FROM tbl_contacts WHERE id IN (".$del.")";
		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Deleted!","Contact has been deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout('history.go(-1)',1500);</script>";
		} 
}}
	elseif(isset($_GET["id"])){
		$id = $_GET["id"];
		$sql = "DELETE FROM tbl_contacts WHERE id='".$id."'";

		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Deleted!","Contact has been deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'contacts.php';\",1500);</script>";
		} 
		else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);}
	?>