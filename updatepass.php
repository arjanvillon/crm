<?php session_start();
include "connect.php";
?>

<!doctype html>
<html>
<head>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php 
	if(isset($_POST["updatepass"])){
		$psw = $_POST["current_password"];
		$pswp = $_POST["new_password"];
		$rpswp = $_POST["retype_password"];
	
		
		$sql = "UPDATE tbl_users SET password_psw= '".md5($pswp)."' WHERE tbl_users.username_str='".$_SESSION["uname"]."'";
		
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Password has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'extra_profile.php';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>
	
	</body>
</html>