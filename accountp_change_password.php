<?php
include "connect.php";
session_start();
header('Cache-Control: no-store, no-cache, must-revalidate');
$sql = mysqli_query($conn, "SELECT * FROM tbl_users WHERE tbl_users.username_str='".$_SESSION["uname"]."'"); //You don't need a ; like you do in SQL
$row = $sql->fetch_assoc();//Creates a loop to loop through results
?>
<?php
$sql7= mysqli_query($conn, "SELECT * FROM tbl_images WHERE tbl_images.profile_idr='".$_SESSION["uname"]."'");
$row7= mysqli_fetch_array($sql7);
mysqli_close($conn);?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>1Devs Inc. | Profile</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/metro.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style_responsive.css" rel="stylesheet" />
	<link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="shortcut icon" href="assets/img/LOGO.png" />
	<link rel="stylesheet" type="text/css" href="scroll.css" />
	<link rel="stylesheet" type="text/css" href="loader.css" />
	<link rel="stylesheet" type="text/css" href="me_change_password_accountp.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">

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
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.php">
				<img src="assets/img/new logo.png" alt="logo" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">
					
					<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="data:image/jpeg;base64,<?php echo base64_encode($row7['name'] ) ?>" onerror="this.src='assets/img/avatar1.png'" height="21" width="21" class="img-thumnail" />
						<style>.username::first-letter{text-transform:uppercase;}</style><span class="username" style="display:inline-block" ><?=$_SESSION["uname"]?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="extra_profile.php?id2=<?=$id2?>"><i class="icon-user"></i> My Profile</a></li>
							<li><a href="index.html"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        	
			<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box hide">
							<a href="javascript:;" class="remove"></a>
							<input onKeyUp="searchh()" id="searchinput" type="text" placeholder="Search..." />			
							
						</div>
					</form>
		
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active">
					<a href="index_1.php">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class=" has-sub">
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title start active">Sales</span>
					<span class="selected"></span>
					<span class="arrow "></span>
					</a>
					<ul id="myUL" class="sub">
						<li ><a id="acc" href="accounts.php">Accounts</a></li>
						<li ><a href="contacts.php">Contacts</a></li>
						<li ><a href="opportunities.php">Opportunities</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
						<li ><a href="reports.php">Reports</a></li>
					</ul>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title">Marketing</span>
					<span class="arrow "></span>
					</a>
					<ul id="myUL" class="sub">
						<li ><a href="campaign.php">Campaign</a></li>
						<li ><a href="members.php">Members</a></li>
						<li ><a href="tasks_marketing.php">Tasks</a></li>
						<li ><a href="reports.php">Reports</a></li>
					</ul>
				</li>
			</ul>
	
			
			
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
		
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							<i class="icon-briefcase"></i> Profile
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Profile</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
					<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid profile">
					<div class="span12">
						<!--BEGIN TABS-->
						<div class="tabbable tabbable-custom">
							<ul class="nav nav-tabs">
								<li ><a id="overview" href="extra_profile.php" data-toggle="tab">Overview</a></li>
								<li ><a id="profileinfo" href="#tab_1_2" data-toggle="tab">Profile Info</a></li>
								<li class="active"><a id="accountp" href="#tab_1_3" data-toggle="tab">Account</a></li>
							</ul>
							<div class="tab-content">
						
								<div class="active tab-pane row-fluid profile-account" id="tab_1_3">
									<div  class="row-fluid">
										<div class="span12">
											<div class="span3">
												<ul class="ver-inline-menu tabbable margin-bottom-10">
													<li class="">
														<a id="cpersonal" data-toggle="tab" href="#tab_1-1">
														<i class="icon-cog"></i> 
														Personal info
														</a> 
														<span class="after"></span>                           			
													</li>
													<li  class=""><a id="avatar" data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
													<li class="active"><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
												</ul>
											</div>
											<div class="span9">
												<div class="tab-content">
													<div id="tab_1-1" class="tab-pane active">
														
													</div>
													<div id="tab_2-2" class="tab-pane">
														
														</div>
													</div>
													<div id="tab_3-3" class="tab-pane">
														<div style="height: auto;" id="accordion3-3" class="accordion collapse">
															<span id="psw_invalid" style="display: none">
																	<div class="alert alert-error" >
																		 <strong>Error!</strong> Current password do not match your old password.
																	</div>
																</span> 
																<span id="not_matched" style="display: none">
																	<div class="alert alert-error" >
																		 <strong>Error!</strong> Your new password does not match with your confirm password
																	</div>
																</span>   
															<form name="form1" id="accountp_change_password_validate" action="updatepass.php" method="post">
																
																<div id="pass_div">
																<label class="control-label">Current Password</label>
																<input name="current_password" id="current_password" type="password" class="m-wrap span8" required />
														
																</div>
																<div id="pass_div">
																<label class="control-label">New Password</label>
																<input name="new_password" id="new_password"  type="password" class="m-wrap span8" required />
															
							
																</div>							
													
																
																
																
						<div  id="pswd_info">
						<div class="row-fluid">
				<div class="span8 alert alert-block alert-error fade in">
				<h4 class="alert-heading">Password must meet the following requirements:</h4>
				<div class="span5">	
				<ul>
					<li id="letter" class="invalid">At least <strong>one letter</strong></li>
					<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
				</ul>
				</div>
				<div class="span6">
				<ul>
					<li id="number" class="invalid">At least <strong>one number</strong></li>
					<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
				</ul>
				</div>
				<div class="span1"></div>
				</div>
				<div class="span4"></div>
							</div></div>
															<div id="pass_div">
																<label class="control-label">Re-type New Password</label>
																<input name="retype_password" id="retype_password" type="password" class="m-wrap span8" required />
															
																</div>
																<div class="submit-btn">
																	<input type="submit" value="Change Password" name="updatepass" class="btn red"><i class="m-icon-swapright m-icon-white"></i>
																	<a href="extra_profile.php" class="btn">Cancel</a>
																</div>
															</form>
															
														</div>
													</div>
												
												</div>
											</div>
											<!--end span9-->                                   
										</div>
									</div>
								</div>
								<!--end tab-pane-->
					
							</div>
						</div>
						<!--END TABS-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	
								
			
			
	<!-- BEGIN FOOTER -->
	<div class="footer">
		2018 &copy; 1Devs Inc.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="assets/js/jquery-1.8.3.min.js"></script>	
	<script src="assets/breakpoints/breakpoints.js"></script>	
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>		
	<script src="assets/js/jquery.blockui.js"></script>
	<script src="assets/js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->	
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
	<script src="assets/js/app.js"></script>
	
<script>
$('#new_password').keyup(function() {
	var pswd = $(this).val();
	var isValid = true;
	//validate the length
		if ( pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
			isValid = false;
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
	//validate letter
	if ( pswd.match(/[A-z]/) ) {
		$('#letter').removeClass('invalid').addClass('valid');
	} else {
		$('#letter').removeClass('valid').addClass('invalid');
		isValid = false;
	}

	//validate capital letter
	if ( pswd.match(/[A-Z]/) ) {
		$('#capital').removeClass('invalid').addClass('valid');
	} else {
		$('#capital').removeClass('valid').addClass('invalid');
		isValid = false;
	}

	//validate number
	if ( pswd.match(/\d/) ) {
		$('#number').removeClass('invalid').addClass('valid');
	} else {
		$('#number').removeClass('valid').addClass('invalid');
		isValid = false;
	}
	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});	
</script>
<script>
			
			  document.form1.addEventListener('submit', function(event){
				 var fpas= <?php echo md5("document.getElementById('current_password').value"); ?>;
				 var repas= "<?php echo $row['password_psw'];?>";
				 
				if (fpas != repas){
					document.getElementById('psw_invalid').style.display = "block";
					event.preventDefault();
				}
				 else {
					 document.getElementById('psw_invalid').style.display = "none";
				 }
				
			  });
</script>
<script>
				document.form1.addEventListener('submit', function(event){
					var fpas= document.getElementById('new_password').value;
					var repas= document.getElementById('retype_password').value;
				 
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
function dapassw() {
    var x = document.getElementById("current_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
	 <script>
function cdapassw() {
    var x = document.getElementById("new_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
	 <script>
function retpassw() {
    var x = document.getElementById("retype_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

	<script>
 var rept= document.getElementById('overview');
	var repc= document.getElementById('profileinfo');
		var pers = document.getElementById('cpersonal');
		var avar = document.getElementById('avatar');
	avar.addEventListener('click',function(){
		document.location.href = 'accountp_change_avatar.php';
	});
	pers.addEventListener('click', function(){
		document.location.href = 'accountp.php';
	});
		
	rept.addEventListener('click', function(){
						  document.location.href ='extra_profile.php';
						  });
	repc.addEventListener('click', function(){
		document.location.href = 'profile_info.php';
	});
	
 
</script>

 <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"></script>
 <script>
$().ready(function() {
	$("#accountp_change_password_validate").validate();
});
</script>						
			<script>
	$(document).ready(function() {
    $('#accounts_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>
	<script>
		jQuery(document).ready(function() { 
		
			// initiate layout and plugins
			App.setPage("table_managed");
			App.init();
		});
	</script>
	  <script>	  
$(window).load(function(){
     $('.loader').fadeOut();
});
</script>
</body>
<!-- END BODY -->
</html>
