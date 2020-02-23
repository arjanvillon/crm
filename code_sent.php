<?php 
	include "connect.php";
	if(isset($_GET["email"])){
		$email = $_GET["email"];
	}
	$sql = mysqli_query($conn, "SELECT * FROM tbl_users WHERE tbl_users.emailp_eml='".$email."'");

	$row = $sql->fetch_assoc();
	mysqli_close($conn);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>1Devs | Sign Up</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/metro.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="loader.css" />
<link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/style_responsive.css" rel="stylesheet" />
  <link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
  <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
  <link rel="shortcut icon" href="assets/img/LOGO.png" />
  <link rel="stylesheet" type="text/css" href="scroll.css" />
  <style>
	
body{
	margin: 0;
	padding: 0;
	background: url(assets/img/background_login.jpeg);
/*	font-family: sans-serif;
	background-repeat: no-repeat;
	background-size: cover;*/
}
.box #enter{
	position: absolute;
	top: 80px;
}
.logo2{
	position: absolute;
	top: 24%;
	left: 47%;
}
.box{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	/*width: 350px;
	background: #fff;
	padding: 30px;
	height: 400px;
	box-sizing: border-box;
	border: 1px solid rgba(0,0,0,.1);
	box-shadow: 0 5px 10px rgba(0,0,0,.2);*/
	background-color: #fff;
    width: 291px;
    margin: 0 auto;
    margin-bottom: 50px;
    padding: 30px;
    padding-top: 20px;
    padding-bottom: 15px;
}

.box form div{
	position: relative;
} 
.box form div label{
	position: absolute;
	top: 0;
	left: 0;
	color: #999;
	transition: .5s;
	pointer-events: none;
}
.box input[type="submit"]{
	border: none;
	background: #fff;
	outline: none;
	font-weight: 500;
}
.box input[type="submit"]:hover{
	color: red;
	text-decoration: underline red;
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body background="assets/img/background_login.jpeg" class="login">
 <div class="loader">
	<div class="preload">
			<div class="logo">
				1Devs<span style="color: red;"> Inc.</span>
			</div>
			<div class="loader-frame">
				<div class="loader1" id="loader1"></div>
				<div class="loader2" id="loader2"></div>
			</div>
		</div>	
</div>
  <!-- BEGIN Sign Up -->
  <div class="box"> 
   <center style="font-size:18px;"> 1DEV<span style="color: red">S INC.</span>
 </center> 
	  <h3>
	  	Greetings! <?=$row["username_str"]?>
	  </h3>
	  <br>
	   <span>A message with a confirmation code has been sent to your email.</span>
           <form action="send_email.php" method="post">
         <input type="hidden" name="emailf" value="<?=$email?>" />
		<hr>
	  <span><input type="submit" value="Resend Email" name="emailpass"/></span>
	   <span class="pull-right"><a id="go_back" href="index.html" style="font-weight: 600">Go back to login</a></span>
	   </form>
	
		</div>

  <script>
	  $(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
	</script>
 
  
      

    <!-- END REGISTRATION FORM -->
  
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
  <script src="assets/uniform/jquery.uniform.min.js"></script> 
  <script src="assets/js/jquery.blockui.js"></script>
  <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/js/app.js"></script>



 
   
 <script>
    jQuery(document).ready(function() { 
	    	$("input[type=submit]").click(function(){
			$(".loader").fadeIn();
		});
      App.initLogin();
    });
  </script>
	<script>
	$(window).load(function(){
		$(".loader").fadeOut();
	});
	
			$("#go_back").click(function(){
			$(".loader").fadeOut();
		});
	</script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>