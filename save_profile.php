<!doctype html>

<title>1Devs | Save Profile</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php 
session_start();
include "connect.php";
	if(isset($_POST["save_prof"])){
		$firstp = $_POST["firstp"];
		$lastp = $_POST["lastp"];
		$mobilep = $_POST["mobilep"];
		$occupationp = $_POST["occupationp"];
		$countryp = $_POST["countryp"];
		$aboutp = $_POST["aboutp"];
		$websitep = $_POST["websitep"];
		$birthdayp= $_POST["birthdayp"];
		
		
		$sql = "UPDATE tbl_users SET firstp_str= '".$firstp."' , lastp_str= '".$lastp."', countryp_idr= '".$countryp."', birthdayp_dat= '".$birthdayp."', occupationp_str= '".$occupationp."', websitep_str='".$websitep."', mobilep_str='".$mobilep."', aboutp_lng='".$aboutp."' WHERE tbl_users.username_str='".$_SESSION["uname"]."'";
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Profile has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'extra_profile.php';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>
