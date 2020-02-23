<?php 
	include "connect.php";
	session_start();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	$sql = mysqli_query($conn, "SELECT tbl_account.account_name_str as account_name,tbl_account.id as account_id,tbl_tasks.id as tasks_id,priority_idr,task_date_dat,task_type_idr,task_status_idr,description_lng FROM tbl_tasks INNER JOIN tbl_account ON tbl_tasks.account_idr= tbl_account.id  WHERE tbl_tasks.account_idr=$id");
	$row= $sql->fetch_assoc();
?>


<?php
$sql7= mysqli_query($conn, "SELECT * FROM tbl_images WHERE tbl_images.profile_idr='".$_SESSION["uname"]."'");
$row7= mysqli_fetch_array($sql7);?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>1Devs Inc. | Sales Tasks</title>
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
				<li class="has-sub active">
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title start active">Sales</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li class="selected active"><a href="accounts.php">Accounts</a></li>
						<li ><a href="contacts.php">Contacts</a></li>
						<li ><a href="opportunities.php">Opportunities</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
						<li ><a href="reportss.php">Reports</a></li>
					</ul>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title">Marketing</span>
			
					</a>
					<ul class="sub">
						<li ><a href="dashboard_marketing.php">Dashboard</a></li>
						<li ><a href="campaign.php">Campaign</a></li>
						<li ><a href="members.php">Members</a></li>
						<li ><a href="emails.php">Emails</a></li>
						<li ><a href="send_emails.php">Send Emails</a></li>
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
							<i class="icon-tasks"></i>  Tasks
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="tasks.php">Accounts</a>&nbsp;&nbsp;</li>
							<i class="icon-angle-right"></i>
							<li>&nbsp;&nbsp;<a href="view_account.php?id=<?=$id?>"><?php echo $row['account_name'];?></a>&nbsp;&nbsp;</li>
							<i class="icon-angle-right"></i>
							<li>&nbsp;<a href="#">New Task</a></li>
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
                           <i class="icon-reorder"></i> Manage Task
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>

                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="save_task.php?id=<?=$id?>" id="add_task_validate" method="post" class="form-horizontal">
                          
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
                                      
                                      
					        <div class="row-fluid">
                                  <div class="span8">
                                       <div class="control-group">
                              				<label class="control-label" for="tdate1" title="Required">Tasks Date<span class="required" title="Required">*</span></label>
                            			  <div class="controls">
                                   		
                                    		<div class="row-fluid">
											 <div class="span12">
												<input class="span12" required type="datetime-local" id="tdate1" name="tdate" max="2050-12-31" min="<?php echo date("Y-m-d h:i:sa")?>"/>
										 	</div>
                                    	   </div>                             
                            			  </div>
                             		  </div>
								</div>
								<div class="span4">
										   <div class="row-fluid">
										       <div class="span4">
										        <span>All Day</span>
											   </div>
											   <div class="span8"><!-- class="danger-toggle-button"-->
											    <div >
														<input name="allday_task" id="all_day" name="hold" type="checkbox" class="toggle" onClick="yourdate()" />
												 </div>
											   </div>
											</div>	 
												
									
								
								
								</div>
							 </div>
                             		  <div class="row-fluid"> 
                             		  	  	  
                             	 <div class="control-group">
									  <label class="control-label" title="Required">Priority<span class="required" title="Required">*</span></label>
									  <div class="controls">
											  <select  style="width: 100%;"  name="priority" class="span8 m-wrap chosen" data-placeholder="Select Priority" tabindex="1" id="select_priority" required>
											  <option value="Low">Low</option>
											  <option value="Medium" selected="selected">Medium</option>
											  <option value="High">High</option>
											  <option value="Urgent">Really High</option>
											  </select>
									  </div>
								  </div>
									 </div>
                  
                  				 <div class="control-group">
									  <label class="control-label" title="Optionally Required">Task Status</label>
									  <div class="controls">
											  <select style="width: 100%;" name="tstatus" class="span10 m-wrap chosen" data-placeholder="Select Task Status" tabindex="1" id="select_task_status">
											  <option value="Not Started" selected="selected">Not Started</option>
											  <option value="Waiting">Waiting</option>
											  <option value="Deferred">Deferred</option>
											  <option value="In Progress">In Progress</option>
											  <option value="Completed">Completed</option>
											  </select>
									  </div>
								  </div>
                  <script>
				 		$(window).resize(function(){
							document.getElementById('select_task_status');
	}); 					 
				</script>
                  				 <div class="control-group">
									  <label class="control-label" title="Required">Task Type<span class="required" title="Required">*</span></label>
									  <div class="controls">
											  <select  style="width: 100%;" name="ttype"  class="span10 m-wrap chosen" data-placeholder="Select Task Type" tabindex="1" id="select_task_type">
											  <option value="Call">Call</option>
											  <option value="email">Email</option>
											  <option value="Tweet">Tweet</option>
											  <option value="Assigned">Assigned</option>
											  <option value="Bill">Bill</option>
											  <option value="Escalated">Escalated</option>
											  <option value="Eval Setup">Eval Setup</option>
											  <option value="Fax">Fax</option>
											  <option value="Follow Up">Follow Up</option>
											  <option value="Info Request">Info Request</option>
											  <option value="Inquiry">Inquiry</option>
											  <option value="Letter">Letter</option>
											  <option value="Meeting">Meeting</option>
											  <option value="Note">Note</option>
											  <option value="PO received">PO received</option>
											  <option value="Proposal" selected="selected">Proposal</option>
											  <option value="Quote">Quote</option>
											  <option value="Skype Chat">Skype Chat</option>
											  <option value="Subscribed">Subscribed</option>
											  <option value="Support Request">Support Request</option>
											  <option value="Unsubscribed">Unsubscribed</option>
											  </select>
									  </div>
								  </div>
                   			 <div class="control-group">
									  <label class="control-label" title="Required">Task Owner<span class="required" title="Required" >*</span></label>
									  <div class="controls">
											  <select  style="width: 100%;" name="towner" class="chosen span10 m-wrap" data-placeholder="Select Task Owner" tabindex="1" id="select_task_owner">
											  <?php 
													$sql = mysqli_query($conn,"SELECT id,display_name_str FROM tbl_owner");
													while ($row = $sql->fetch_assoc()){
													  $id = $row['id'];
													  $name = $row['display_name_str']; 
													  echo '<option selected="selected" value="'.$id.'">'.$name.'</option>';
												}
							  					mysqli_close($conn);
												?>
											  </select>
											  
									  </div>
								  </div>
                     <div class="control-group">
							   <label class="control-label" for="desc" title="Optional">Description</label>
                              <div class="controls span8">
                                 <textarea  style="width: 100%;" id="desc" maxlength="330" spellcheck="true" name="tdescription" rows="10" class="span12 m-wrap"></textarea>
                              </div>
                           </div>   
                   		 
                             		  
                             		  
                          		 </div><!--end of 1st span-->
							   </div><!--end of 1st row-fluid-->
                                  
                                  
                                 
                                    
                                    </div>
                                    <!--/row-->
                              <div class="form-actions clearfix">
                                <!--MAGLALAGAY BA AKO NG CANCEL BUTTON?-->
                                 <a href="tasks.php" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Cancel
                                 </a>
                                
                                 <input type="submit" value="Submit" name="save5" class="btn red button-next "><i class="m-icon-swapright m-icon-white"></i>
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
	$("#add_task_validate").validate();
});
</script>  
 
 <script>
	function yourdate(){ 
	 
	 var x1 = document.getElementById("all_day");
	 if (x1.checked == true){
		 document.getElementById("tdate1").type = "date";
		 document.getElementById("tdate1").min = "<?php echo date("Y-m-d")?>";

	 }
	 else {
		 document.getElementById("tdate1").type = "datetime-local";	
		 document.getElementById("tdate1").min = "<?php echo date("Y-m-d h:i:sa")?>";
	 }	
		 
	}
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
