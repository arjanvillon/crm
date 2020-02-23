	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
		include "connect.php";
		if(isset($_POST["edit8"])){
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
		
		$sql = "UPDATE tbl_leads SET lcname_str= '".$lcname."', lcaddress_lng= '".$lcaddress."', lcwebsite_str= '".$lcwebsite."', lsalutation_idr= '".$lsalutation."', lfirstname_str= '".$lfirstname."', lmiddle_str= '".$lmiddle."', llastname_str= '".$llastname."', ljob_title_str= '".$ljobtitle."', ldepartment_str= '".$ldepartment."', lphone_str= '".$lphone."', lmobile_str= '".$lmobile."', lemail_eml= '".$lemail."', lnotes_lng= '".$lnotes."' WHERE tbl_leads.id='".$id."'";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Lead has been updated!","success");';
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