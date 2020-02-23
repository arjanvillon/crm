<?php 
	session_start();
	include "connect.php";
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
?>
<?php
$sql7= mysqli_query($conn, "SELECT * FROM tbl_images WHERE tbl_images.profile_idr='".$_SESSION["uname"]."'");
$row7= mysqli_fetch_array($sql7);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>1Devs Inc. | Campaign</title>
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
	<link rel="shortcut icon" href="assets/img/1devs logo2.png" />
	
	   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
      <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
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
				<li class="has-sub">
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title ">Sales</span>
					</a>
					<ul class="sub">
						<li ><a href="accounts.php">Accounts</a></li>
						<li ><a href="contacts.php">Contacts</a></li>
						<li ><a href="opportunities.php">Opportunities</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
						<li ><a href="reportss.php">Reports</a></li>
					</ul>
				</li>
				<li class="active has-sub ">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title start active">Marketing</span>
					<span class="selected"></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li class="selected active"><a href="campaign.php">Campaign</a></li>
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
							<i class="icon-inbox"></i>  Campaigns
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="campaign.php">Campaigns</a>
							<i class="icon-angle-right"></i>
							</li>
							
							<li><a href="#">Edit Campaign</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
							<?php 
											$sql = mysqli_query($conn, "SELECT tbl_owner.display_name_str as owner, tbl_owner.id as owner_id, tbl_campaign.id as campaign_id, campaign_name_str, campaign_type_idr, campaign_status_idr, start_date_dat, end_date_dat, budgeted_cost_cur, actual_cost_cur, active_bol, drip_feed_bol, owner_idr FROM tbl_campaign INNER JOIN tbl_owner ON tbl_campaign.owner_idr= tbl_owner.id WHERE tbl_campaign.id=$id");//You don't need a ; like you do in SQL
											$row= $sql->fetch_assoc();
							?>
				<!-- BEGIN PAGE CONTENT-->
						     <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box red">
                     <div class="portlet-title">
                        <h4 style="color: #fff">
                           <i class="icon-reorder"></i> Manage Campaign
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>

                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form name="form1" id="edit_campaign_validate" action="save_edited_campaign.php?id=<?=$id?>" onSubmit="return date()" method="post" class="form-horizontal">
                          
                          <!-- <div class="alert alert-error hide">
                              <button class="close" data-dismiss="alert"></button>
                              You have some errors. Please check below.
                           </div>
                           <div class="alert alert-success hide">
                              <button class="close" data-dismiss="alert"></button>
                              Adding Campaign successful!
                           </div> -->
                           <div class="form-wizard">
                  
 
                              <h3 class="form-section">Details</h3>
                              
                         <div class="row-fluid">
                                       <div class="span7">
                                       <div class="control-group">
                              <label class="control-label" for="cname" title="Required">Campaign Name<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                      <input spellcheck="true" id="cname" maxlength="30" minlength="5" name="cname" type="text" class="span10 m-wrap" value="<?=$row["campaign_name_str"]?>" required>
                              </div>
                           </div>
                   
                          
                           <div class="control-group">
                              <label class="control-label " title="Required">Campaign Type<span class="required" title="Required">*</span></label>
                              <div class="controls ">
                                  <select  name="ctype" class="span10 m-wrap chosen" data-placeholder="Select Campaign Type" tabindex="1" id="selectcampaign_type" required>
                                  <option value="<?=$row["campaign_type_idr"]?>" selected="selected"><?=$row["campaign_type_idr"]?></option>
                                  <option value="Advertisement">Advertisement</option>
                                  <option value="Adwords">Adwords</option>
                                  <option value="Direct Mail">Direct Mail</option>
                                  <option value="Email">Email</option>
                                  <option value="Newsletter">Newsletter</option>
                                  <option value="Other">Other</option>
                                  <option value="Pay per Lead">Pay per Lead</option>
                                  <option value="Seminar">Seminar</option>
                                  <option value="Telemarketing">Telemarketing</option>
                                  <option value="Trade Show">Trade Show</option>
                                  </select>           
                              </div>
                           </div>
                            <div class="control-group">
                              <label class="control-label" title="Required">Campaign Status<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                   <select  name="cstatus" class="span10 m-wrap chosen" data-placeholder="Select Campaign Status" tabindex="1" id="selectcampaign_status" required>
                                   <option value="<?=$row["campaign_status_idr"]?>" selected="selected"><?=$row["campaign_status_idr"]?></option>
                                   <option value="Completed">Completed</option>
                                   <option value="Planned">Planned</option>
                                   <option value="Running">Running</option>
                                   <option value="Waiting">Waiting</option>
                                   </select>
                              </div>
                           </div> 
                                       
                                       
                                       
                                        <div class="control-group">
                              <label class="control-label" for="bcost" title="Optional">Budgeted Cost</label>
                              <div class="controls">
                                     <div class="input-icon left ">
                                       <i>&#8369;</i>
                                       <input class="m-wrap span10" id="bcost" name="bcost" type="number" class="span12" placeholder="" />
                                    </div>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="acost" title="Optional">Actual Cost</label>
                              <div class="controls">
                                   <div class="input-icon left">
                                       <i>&#8369;</i>
                                       <input class="m-wrap span10" id="acost" name="acost" type="number" class="span12" placeholder="" />
                                    </div>
                              </div>
                           </div>
                                
                                     
                                       
                                       
                                       
                                       </div>
                                       <!--/span-->
                               <div class="span4">
                               <div class="control-group">
                              <label class="control-label" title="Required">Start Date<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                <input id="start" name="sdate" max="2050-12-31"  size="16" type="date" value="<?=$row["start_date_dat"]?>" required/>
                              </div>
                           </div>
                                 
                                       <div class="control-group">
                              <label class="control-label" title="Required">End Date<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                <input id="end" name="edate" max="2050-12-31"  min="<?php echo date("Y-m-d");?>"  size="16" type="date" value="<?=$row["end_date_dat"]?>" required/>
                                <span style="padding: 4px; color: #cc0033;display: none" id="error_date">Please set an end date greater than the start date</span>
                              </div>
                           </div>
                                 <script>
									 document.form1.addEventListener('submit', function(event){
										 var start = document.getElementById("start").value;
										 var end = document.getElementById("end").value;
									 
										 if (start >= end){
											 	document.getElementById("error_date").style.display = "block";
	 											event.preventDefault();
										 }
									 });
									 
									 
								   </script>
                                    
                                          
                             <div class="control-group">
                              <label class="control-label" for="active">Active</label>
                              <div class="controls">
                                <div class="danger-toggle-button">
                                    <input name="active" id="active" type="checkbox" class="toggle" checked="checked" />
                                 </div>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="drip">Drip Feed</label>
                              <div class="controls">
                                 <div class="danger-toggle-button">
                                    <input name="drip" type="checkbox" id="drip" class="toggle" checked="checked" />
                                 </div>
                    
                                 </div>
                              </div>
                                      
                                   <div class="control-group">
							   <label class="control-label" title="Required">Owner<span class="required" title="Required">*</span></label>
                              <div class="controls span6">
                                 <select class="chosen span12 m-wrap" data-placeholder="Choose a Category" name="owner" required>
                                   <option selected="selected" value=<?=$row["owner_id"]?>><?=$row["owner"]?></option>
                                    <?php 


									$sql = mysqli_query($conn,"SELECT id,display_name_str FROM tbl_owner");
									while ($row = $sql->fetch_assoc()){
									  $id = $row['id'];
									  $name = $row['display_name_str']; 
									  echo '<option value="'.$id.'">'.$name.'</option>';
									}
									mysqli_close($conn);
									?>
                                 </select> 
                              </div>
                           </div>    
                                       
                                       
                                       </div>
                                       <!--/span-->
                          
                                    
                                    </div>
                                    <!--/row--> 
                                    <div class="form-actions clearfix">
                                <!--MAGLALAGAY BA AKO NG CANCEL BUTTON?-->
                              		<a href="campaign.php" class="btn button-previous">
                                 	<i class="m-icon-swapleft"></i> Cancel 
                                 </a>
                                 
                                 <input type="submit" value="Submit" name="edit4" class="btn red button-submit "><i class="m-icon-swapright m-icon-white"></i>
                              </div>                
                                <!--close for all-->
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
	$("#edit_campaign_validate").validate();
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
	});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
