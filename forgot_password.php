<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>1Devs  |  Forgot Password</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/metro.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/style_responsive.css" rel="stylesheet" />
  <link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
  <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
  <link rel="shortcut icon" href="assets/img/LOGO.png" />
  <link rel="stylesheet" type="text/css" href="me_login.css" />
  <link rel="stylesheet" type="text/css" href="scroll.css" />
  <link rel="stylesheet" type="text/css" href="me_forgot_password.css" />
   <link rel="stylesheet" type="text/css" href="loader.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
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

    <!-- BEGIN LOGIN FORM -->

    
    
      <div class="box">
        <center style="font-size:18px;"> 1DEV<span style="color: red">S INC.</span>
 </center>  
        <!-- BEGIN FORGOT PASSWORD FORM -->
    <form action="send_email.php" method="post">
      <h3 class="">Forgot Password ?</h3>
      <p>Enter your e-mail address below to reset your password.</p><br>
   			<div>
			<input class="m-wrap placeholder-no-fix" type="email" name="emailf" required/>
			<label>Email</label>
			</div>
       
         <hr>
         <input type="submit" id="register-submit-btn" class="btn green pull-right" name="emailpass" value="Submit"> 

     <hr>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
		
		
		</div>

      
    <!-- END LOGIN FORM -->        

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
		$('input[type=submit]').click(function(){
			  $('.loader').fadeIn();
		});  
 
      App.initLogin();
    });
  </script>
  <script>
	  
$(window).load(function(){
     $('.loader').fadeOut();
});
</script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>