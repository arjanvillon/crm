<!doctype html>
<?php 
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	include "connect.php";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
	if(isset($_POST["edit1"])){
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
		
		$sql = "UPDATE tbl_account SET account_name_str= '".$aname."' , address_lng= '".$address."', city_str= '".$city."', country_idr= '".$country."', postcode_int= '".$postcode."', phone_str='".$phone."', website_str='".$website."', campaign_idr='".$campaign."', notes_lng='".$notes."', account_type_idr='".$type."', owner_idr='".$owner."', source_idr='".$source."', sector_idr='".$sector."' WHERE tbl_account.id='".$id."'";
		
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Contact has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_account.php?id=".$id."';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>