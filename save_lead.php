	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
include "connect.php";
	if(isset($_POST["save8"])){
		if(isset($_GET["id"])){
			$id= $_GET["id"];}
		$lcname= $_POST["lcname"];
		$lcaddress= $_POST["lcaddress"];
		$lcwebsite= $_POST["lcwebsite"];		
		$lsalutation= $_POST["lsalutation"];
		$lfirstname= $_POST["lfirstname"];
		$lmiddle= $_POST["lmiddle"];
		$llastname= $_POST["llastname"];
		$ljobtitle= $_POST["ljobtitle"];
		$ldepartment= $_POST["ldepartment"];
		$lphone= $_POST["lphone"];
		$lmobile= $_POST["lmobile"];
		$lemail= $_POST["lemail"];
		$lnotes= $_POST["lnotes"];
		$ldate_added = date("Y-m-d");
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "tablemaker";
		
		
		$sql = "INSERT INTO tbl_leads (clead_idr, lcname_str, lcaddress_lng, lcwebsite_str, lsalutation_idr, lfirstname_str, lmiddle_str, llastname_str, ljob_title_str, ldepartment_str, lphone_str, lmobile_str, lemail_eml, lnotes_lng, ldate_added) VALUES ('".$id."','".$lcname."','".$lcaddress."','".$lcwebsite."','".$lsalutation."','".$lfirstname."','".$lmiddle."','".$llastname."','".$ljobtitle."','".$ldepartment."','".$lphone."','".$lmobile."','".$lemail."','".$lnotes."','".$ldate_added."')";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New lead created successfully!","success");';
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