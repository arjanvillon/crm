<!doctype html>
<?php 
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	include "connect.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>

<?php 
	if(isset($_POST["edit2"])){
		$aname= $_POST["aname"];
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
		
		
		$sql = "UPDATE tbl_contacts SET account_idr= '".$aname."', salutation_idr= '".$salutation."', first_str= '".$firstname."', middle_str='".$middle."', last_str='".$lastname."', job_title_str='".$jobtitle."', department_str='".$department."', manager_str='".$manager."', assistant_str='".$assistant."', phone_str='".$phone."', home_str='".$home."', mobile_str='".$mobile."', other_str='".$other."', email_eml='".$email."', skype_str='".$skype."', decision_bol='".$decision."', hold_bol='".$hold."', address_lng='".$address."', city_str='".$city."', country_idr='".$country."', postcode_int='".$postcode."', notes_lng='".$notes."' WHERE tbl_contacts.id=".$id."";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Contact has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_contact.php?id=".$id."';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>
</body>
</html>