<?php 
	include "connect.php";
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
	if(isset($_POST["edit3"])){
		$aname= $_POST["aname"];
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
		

		$sql = "UPDATE tbl_opportunities SET account_idr= '".$aname."', opportunity_name_str='".$oname."', close_date_dat='".$date."', status_idr='".$ostatus."', total_value='".$total."', next_step_str='".$next_step."', forecast_idr='".$forecast."', probability_idr='".$probability."', competitor_str='".$competitor."', repeat_order_bol='".$repeat."', source_idr='".$osource."', loss_reason_str='".$loss_reason."', campaign_idr='".$campaign."', report_lng='".$report."', description_lng='".$description."' , quantity_lng='".$quant_array."', product_lng='".$prod_array."', uprice_lng='".$uprice_array."' WHERE tbl_opportunities.id=".$id."";
		
		if (mysqli_query($conn, $sql)) {
    		echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Opportunity has been updated!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_opportunity.php?id=".$id."';\",1500);</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}
	?>