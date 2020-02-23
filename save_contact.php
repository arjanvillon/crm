<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>

<?php 
	include "connect.php";
	if(isset($_POST["save2"])){
	if(isset($_GET["id"])){
		$aname = $_GET["id"];
	} else{
		$aname= $_POST["aname"];
	}
		$salutation= $_POST["salutation"];
		$firstname= $_POST["firstname"];
		$middle= $_POST["middle"];
		$lastname= $_POST["lastname"];
		$jobtitle= $_POST["jobtitle"];
		$department= $_POST["department"];
		$manager= $_POST["manager"];
		$assistant= $_POST["assistant"];
		$phone= $_POST["phone"];
		$home= $_POST["home"];
		$mobile= $_POST["mobile"];
		$other= $_POST["other"];
		$email= $_POST["email"];
		$skype= $_POST["skype"];
		if(isset($_POST["decision"])){					
			$decision= 1;
		}
		else{
			$decision=0;
		}
		if(isset($_POST["hold"])){
			$hold=1;
		}
		else{
			$hold=0;
		}
		$address= $_POST["address"];
		$city= $_POST["city"];
		$postcode= $_POST["postcode"];
		$country= $_POST["country"];
		$notes= $_POST["notes"];
		$date_added = date("Y-m-d");
		
		$sql = "INSERT INTO tbl_contacts (account_idr, salutation_idr, first_str, middle_str, last_str, job_title_str, department_str, manager_str, assistant_str, phone_str, home_str, mobile_str, other_str, email_eml, skype_str, decision_bol, hold_bol, address_lng, city_str, country_idr, postcode_int, notes_lng, date_added) VALUES ('".$aname."','".$salutation."','".$firstname."','".$middle."','".$lastname."','".$jobtitle."','".$department."','".$manager."','".$assistant."','".$phone."','".$home."','".$mobile."','".$other."','".$email."','".$skype."','".$decision."','".$hold."','".$address."','".$city."','".$country."','".$postcode."','".$notes."','".$date_added."' )";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New contact created successfully!","success");';
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