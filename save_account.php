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
		if(isset($_POST["save1"])){
		$aname= $_POST["aname"];
		$address= $_POST["address"];
		$city= $_POST["city"];
		$postcode= $_POST["postcode"];
		$country= $_POST["country"];
		$phone= $_POST["phone"];
		$website= $_POST["website"];
		$campaign= $_POST["campaign"];
		$notes= $_POST["notes"];
		$type= $_POST["type"];
		$owner= $_POST["owner"];
		$source= $_POST["source"];
		$sector= $_POST["sector"];
		
		$sql = "INSERT INTO tbl_account (account_name_str, address_lng, city_str, country_idr, postcode_int, phone_str, website_str, campaign_idr, notes_lng, account_type_idr, owner_idr, source_idr, sector_idr) VALUES ('".$aname."', '".$address."','".$city."','".$country."','".$postcode."','".$phone."','".$website."','".$campaign."','".$notes."','".$type."','".$owner."','".$source."','".$sector."' )";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New contact created successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'accounts.php';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>
</body>
</html>