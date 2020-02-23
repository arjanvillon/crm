<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
<?php
	include "connect.php";
	if(isset($_POST["UserLogin123"])){
		$uname = $_POST["uname"];
 		$psw = $_POST["psw"];
		$emailp = $_POST["emailp"];
		$sql = mysqli_query($conn,"SELECT * FROM tbl_users WHERE BINARY username_str='$uname' and password_psw='".md5($psw)."' and emailp_eml='".md5($emailp)."'");
		$row = $sql->fetch_assoc();
		$id = $row["id"];
		$ctr = mysqli_num_rows($sql);
		
		if ($ctr > 0) {
			session_start();
			$_SESSION["uname"]= $uname;
			$_SESSION["emailp"]= $emailp;
			header("Location: index_1.php");
   			
		}
		
		else {
    		echo "<script type='text/javascript'>alert('There are no registered accounts yet!')</script>";
			header("Location: index.html");
		}
		mysqli_close($conn);
	}
	
	?>

</body>
</html>