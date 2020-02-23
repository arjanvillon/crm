<?php 
	include "connect.php";
	if(isset($_GET["email"])){
		$email = $_GET["email"];
	}
	$sql = mysqli_query($conn, "SELECT * FROM tbl_users WHERE tbl_users.emailp_eml='".$email."'");

	$row = $sql->fetch_assoc();?>

<!doctype html>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
	if(isset($_POST["changepass"])){
		$psw = $_POST["psw"];
		$rpsw = $_POST["rpsw"];
		
		$sql = "UPDATE tbl_users SET password_psw= '".md5($psw)."' WHERE tbl_users.emailp_eml='".$email."'";
		
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Password has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'index.html';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>
	
	</body>
</html>