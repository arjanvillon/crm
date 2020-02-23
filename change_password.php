<?php 
	include "connect.php";
	if(isset($_GET["email"])){
		$email = $_GET["email"];
	}
	$sql = mysqli_query($conn, "SELECT * FROM tbl_users WHERE tbl_users.emailp_eml='".$email."'");
	$row = $sql->fetch_assoc();
	mysqli_close($conn);?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>1Devs | Change Password</title>
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
  <link rel="stylesheet" type="text/css" href="me_change_password.css" />
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
      <h3>Change Password</h3><br>
      <span id="enter">Enter your new password</span><br>
	   <form name="form1" onSubmit="return " id="sign_up_validate" action="change_password1.php?email=<?=$row["emailp_eml"]?>" method="post">	
		
		


			<div>
			<div class="input_icon">
			<input id="mypassw" class="m-wrap placeholder-no-fix" type="password" name="psw" required/>
			<label>Password </label>
			<i id="psw" onClick="dapassw()" class="icon-eye-open" style="color: #999;cursor: pointer"></i>
			</div>
			</div>
			<div>
			<div class="input_icon">
			<input id="cpassw" class="m-wrap placeholder-no-fix" type="password" name="rpsw" required/>
			<i id="pswrr" onClick="cdapassw()" class="icon-eye-open" style="color: #999;cursor: pointer"></i>
			<label>Retype Password </label>
			</div>
			</div>
		
			<hr>
			<input type="submit" id="register-submit-btn" class="btn green pull-right" name="changepass" value="Submit">
			
			<div id="pswd_info">
				<h4>Password must meet the following requirements:</h4>
				<ul>
					<li id="letter" class="invalid">At least <strong>one letter</strong></li>
					<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
					<li id="number" class="invalid">At least <strong>one number</strong></li>
					<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
				</ul>
			</div>
			<div id="not_matched">
				<h5>Passwords do not match</h5>
			</div>
			
		</form>
		<br>
		<div class="create-account">
        <p>
          Already have an account ?&nbsp; 
          <a href="index.html" id="register-btn" class="">Login to your account</a>
        </p>
      </div>
		</div>

  
 
  
      

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
$('#mypassw').keyup(function() {
	var pswd = $(this).val();
	//validate the length
		if ( pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
	//validate letter
	if ( pswd.match(/[A-z]/) ) {
		$('#letter').removeClass('invalid').addClass('valid');
	} else {
		$('#letter').removeClass('valid').addClass('invalid');
	}

	//validate capital letter
	if ( pswd.match(/[A-Z]/) ) {
		$('#capital').removeClass('invalid').addClass('valid');
	} else {
		$('#capital').removeClass('valid').addClass('invalid');
	}

	//validate number
	if ( pswd.match(/\d/) ) {
		$('#number').removeClass('invalid').addClass('valid');
	} else {
		$('#number').removeClass('valid').addClass('invalid');
	}
	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});	
</script>
	<script>
$().ready(function() {
	$("#login_validate").validate();
});
</script> 
 
 
  <script>
function dapassw() {
    var x = document.getElementById("mypassw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

<script>
function cdapassw() {
    var x = document.getElementById("cpassw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
		  
<script>
			  document.form1.addEventListener('submit', function(event){
				 var fpas= document.getElementById('mypassw').value;
				 var repas= document.getElementById('cpassw').value;
				if (fpas != repas){
					document.getElementById('not_matched').style.display = "block";
					event.preventDefault();
				}
				else{
					document.getElementById('not_matched').style.display = "none";
				}
			  });
 </script>
 <script>
$().ready(function() {
	$("#sign_up_validate").validate();
});
</script> 
   
 <script>
    jQuery(document).ready(function() {   
      App.initLogin();
    });
  </script>
  <script>
$(window).load(function(){
	$(".loader").fadeOut();
});	
</script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>