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
	if(isset($_POST["save3"])){
	if(isset($_GET["id"])){
		$aname = $_GET["id"];
	} else{
		$aname= $_POST["aname"];
	}
		$oname= $_POST["oname"];
		$date= $_POST["date"];
		$ostatus= $_POST["ostatus"];
		$next_step= $_POST["next_step"];
		$forecast= $_POST["forecast"];
		$probability= $_POST["probability"];
		$competitor= $_POST["competitor"];
		if(isset($_POST["repeat"])){
			$repeat=1;
		}
		else{
			$repeat=0;
		}
		$osource= $_POST["osource"];
		$loss_reason= $_POST["loss_reason"];
		$campaign= $_POST["campaign"];
		$report= $_POST["report"];
		$description= $_POST["description"];
		
		
		$total =0;
		if(isset($_POST["quantity"])){
			$quantity = $_POST["quantity"];
			$quant_count = count($quantity);}
		else{
			$quantity = 0;
			$quant_count = 0;
		}
		$quant_array = "";
		if($quant_count>0){
		for($x=0; $x<=$quant_count-1; $x++){
			$quant_array = $quant_array . " " . $quantity[$x] . " || ";
		}}
		else{
			$quant_array = 0;
		}
		
		if(isset($_POST["product"])){
			$product = $_POST["product"];
			$prod_count = count($product);
		}
		else{
			$product = 0;
			$prod_count = 0;
		}
		$prod_array = "";
		
		if($prod_count>0){
		for($x=0; $x<=$prod_count - 1; $x++){
			$prod_array = $prod_array . " " . $product[$x] . " || ";
		}}
		else{
			$prod_array = 0;
		}
		
		if(isset($_POST["uprice"])){
			$uprice = $_POST["uprice"];
			$uprice_count= count($uprice);}
		else{
			$uprice = 0;
			$uprice_count = 0;
		}
		$uprice_array= "";
		
		if($uprice_count>0){
		for($x=0; $x<=$uprice_count - 1; $x++){
			$uprice_array = $uprice_array . " " . $uprice[$x] . " || ";
		}}
		else{
			$uprice_array = 0;
		}
		
		for($x=0; $x<=$uprice_count - 1; $x++){
			$total = $total + ($uprice[$x] * $quantity[$x]);
		}
		
		
		$sql = "INSERT INTO tbl_opportunities (account_idr, opportunity_name_str, close_date_dat, status_idr, total_value, next_step_str, forecast_idr, probability_idr, competitor_str, repeat_order_bol, source_idr, loss_reason_str, campaign_idr, report_lng, description_lng, quantity_lng, product_lng, uprice_lng) VALUES ('".$aname."','".$oname."','".$date."','".$ostatus."','".$total."','".$next_step."','".$forecast."','".$probability."','".$competitor."','".$repeat."','".$osource."','".$loss_reason."','".$campaign."','".$report."','".$description."','".$quant_array."','".$prod_array."','".$uprice_array."')";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New opportunity created successfully!","success");';
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