<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
</head>

<body>
<?php
	include "connect.php";
	if(isset($_POST["register1"])){
		$uname= $_POST["uname"];
		$psw= $_POST["psw"];
		$pswr= $_POST["rpsw"];
		$emailp = $_POST["emailp"];
		$sql = "SELECT * FROM tbl_users WHERE username_str='$uname'";
		$result = $conn->query($sql);
		$rows = mysqli_num_rows($result);
		$sql1 = "SELECT * FROM tbl_users WHERE emailp_eml='$emailp'";
		$result1 = $conn->query($sql1);
		$rows1 = mysqli_num_rows($result1);
		if($rows>0 && $rows1>0 ){
			header("Location: sign_up.php?error=3");
		}
		elseif($rows>0){
			header("Location: sign_up.php?error=1");
		}
		else{
		if($rows1>0){
			header("Location: sign_up.php?error=2");
		}
		else{
		$sql = "INSERT INTO tbl_owner (display_name_str)
		VALUES ('".$uname."')";
		mysqli_query($conn, $sql);
		$sql = "INSERT INTO tbl_users (username_str, password_psw, emailp_eml) VALUES ('".$uname."', '".md5($psw)."', '".md5($emailp)."')";
		if (mysqli_query($conn, $sql)) {
		header("Location: index.html");
		} 
		else {
		header("Location: sign_up.php");
		}}}
		mysqli_close($conn);
		
			
	}
	?>
</body>
</html>
