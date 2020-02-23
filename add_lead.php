<?php 
	include "connect.php";
	session_start();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
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
	<title>1Devs Inc. | Leads</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/metro.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="loader.css" />
<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style_responsive.css" rel="stylesheet" />
	<link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="shortcut icon" href="assets/img/LOGO.png" />
   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="scroll.css" />
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
				<a class="brand" href="index_1.php">
				<img src="assets/img/new logo.png" alt="logo" >
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
						<span class="username"><?=$_SESSION["uname"]?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="extra_profile.php"><i class="icon-user"></i> My Profile</a></li>

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
							<input type="text" placeholder="Search..." />				
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start ">
					<a href="index_1.php">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class=" has-sub">
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title">Sales</span>
					<span class="selected"></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="accounts.php">Accounts</a></li>
						<li ><a href="contacts.php">Contacts</a></li>
						<li ><a href="opportunities.php">Opportunities</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
						<li ><a href="reportss.php">Reports</a></li>
					</ul>
				</li>
				<li class="active has-sub">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title start active">Marketing</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
			<li class="selected active"><a href="campaign.php">Campaign</a></li>
						<li ><a href="members.php">Members</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
						<li ><a href="reports.php">Reports</a></li>
					</ul>
				</li>
				
			
			
			
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						  
						<!-- END BEGIN STYLE CUSTOMIZER -->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							<i class="icon-group"></i>  Leads
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="campaign.php">Campaign</a>&nbsp;&nbsp;</li>
							<i class="icon-angle-right"></i>
							<li>&nbsp;&nbsp;<a href="#">New Lead</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
						     <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box red">
                     <div class="portlet-title">
                        <h4 style="color: #fff">
                           <i class="icon-reorder"></i> Manage Lead
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>

                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form id="add_lead_validate" action="save_lead.php?id=<?=$id?>" method="post" class="form-horizontal">
                     <h3 class="form-section">Company Details</h3>
                              <div class="control-group">
                              <label class="control-label" for="compname" title="Required">Company Name<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                 <input maxlength="30" spellcheck="true" type="text" id="compname" name="lcname" data-required="1" class="span6 m-wrap" required>
                                 
                              </div>
                           </div>
                           <div class="control-group">
							   <label class="control-label" title="Optional" for="compaddress">Company Address</label>
                              <div class="controls">
                                 <textarea id="compaddress" spellcheck="true" maxlength="80" class="col-lg-7 m-wrap span6" name="lcaddress"></textarea>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="compweb" title="Optional">Website</label>
                              <div class="controls">
                                 <input spellcheck="true" name="lcwebsite" placeholder="https://www.google.com" id="compweb" type="url" class="span6 m-wrap">
                              </div>
                           </div>
                           
                           <h3 class="form-section">Company Representative</h3>
                           
                                     <div class="control-group">
                              <label class="control-label" title="Optional">Salutation</label>
                              <div class="controls">
                                <select name="lsalutation" class="chosen span6 m-wrap" data-placeholder="Choose Salutation" tabindex="1">
                              		 <option value="Mr" selected="selected">Mr</option>
                              		 <option value="Mrs">Mrs</option>
                              		 <option value="Miss">Miss</option>
                              		 <option value="Ms">Ms</option>
                              		 <option value="Dr">Dr</option>
                              		 <option value="Herr">Herr</option>
                              		 <option value="Frau">Frau</option>
                              		 <option value="Fraulein">Fraulein</option>
                              		 <option value="M">M</option>
                              		 <option value="Monsieur">Monsieur</option>
                              		 <option value="Madame">Madame</option>
                              		 <option value="Mme">Mme</option>
                              		 <option value="Signor">Signor</option>
                              		 <option value="Signora">Signora</option>
                              		 <option value="Professor">Professor</option>
                              		 </select>
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label" for="lfirstname" title="Required">First<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                 <input name="lfirstname" id="lfirstname" maxlength="20" spellcheck="true" type="text" class="span6 m-wrap" required>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="lmiddle" title="Optional">Middle</label>
                              <div class="controls">
                                 <input id="lmiddle" maxlength="20" spellcheck="true" name="lmiddle" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                            <div class="control-group">
                              <label class="control-label" for="llastname" title="Required">Last<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                 <input name="llastname" id="llastname" maxlength="20" spellcheck="true" type="text" class="span6 m-wrap" required>
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label" for="ljobtitle" title="Optional">Job Title</label>
                              <div class="controls">
                                 <input id="ljobtitle" maxlength="30" name="ljobtitle" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                           
                      
                           <div class="control-group">
                              <label class="control-label" for="ldepartment" title="Optional">Department</label>
                              <div class="controls">
                                 <input name="ldepartment" id="ldepartment" maxlength="50" spellcheck="true" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                           
                                       
                         <div class="control-group">
                              <label class="control-label" for="lphone" title="Optional">Phone</label>
                              <div class="controls">
                                 <input name="lphone" type="number" id="lphone"  minlength="7" maxlength="15" class="span6 m-wrap">
                              </div>
                           </div>
                           
                              <div class="control-group">
                              <label class="control-label" for="lmobile" title="Optional">Mobile Number</label>
                              <div class="controls">
                                 <input name="lmobile" type="number" minlength="11" maxlength="11" id="lmobile" class="span6 m-wrap" placeholder="e.g. (xxx-xxxx-xxxx)">
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label" for="lemail" title="Required">Email Address<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                 <input required name="lemail" id="lemail" spellcheck="true" type="email" class="span6 m-wrap" placeholder="e.g. juandelacruz@gmail.com">
                              </div>
                           </div>
                           
                           
                           
                          
                                          <div class="control-group">
							   <label class="control-label" for="lnotes" title="Optional">Notes</label>
                              <div class="controls">
                                 <textarea class="col-lg-7 m-wrap span6" id="lnotes" spellcheck="true" maxlength="300" name="lnotes"></textarea>
                              </div>
                           </div>
                                       
                                         
                                   
                             <div class="form-actions clearfix">
                                <!--MAGLALAGAY BA AKO NG CANCEL BUTTON?-->
                               
                           <a href="view_campaign.php?id=<?=$id?>" class="btn button-next">
                                 <i class="m-icon-swapleft " style="color: #000;"></i> Cancel
                                 </a>
                              <input type="submit" value="Submit" name="save8" class="btn red button-next "><i class="m-icon-swapright m-icon-white"></i>
                             
                                 </div>
                                   
  				 
                                
                                
                                
                                 </div>
                               
                                        
                                        
                                        
                                     
                              
                                 </div><!--close for all-->
                              </div>
                         
                                
                            
                         
						 </form>
                           </div>
						        
                     </div>
                  </div>
             
            </div>
            <!-- END PAGE CONTENT-->         
            <!-- END PAGE CONTENT-->  
							
							
							
							
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
	<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
	   <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
	<script src="assets/js/jquery.blockui.js"></script>
	<script src="assets/js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>	
	<script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script src="assets/js/app.js"></script>		
	  <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script src="assets/js/app.js"></script>     
   <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"></script>
 <script>
$().ready(function() {
	$("#add_lead_validate").validate();
});
</script>   
	
	<script>
		jQuery(document).ready(function() { 
				
			// initiate layout and plugins
			App.init();
		});
	</script>
	<script>
$(window).load(function(){
	$(".loader").fadeOut();
})
</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
