<?php 
	include "connect.php";
	session_start();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	echo '<input type="hidden" id="id1" value="'.$id.'"/>';
	header('Cache-Control: no-store, no-cache, must-revalidate');
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
	<title>1Devs Inc. | Opportunity</title>
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
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="shortcut icon" href="assets/img/LOGO.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
					<span class="title start active">Sales</span>
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
				<li class="has-sub active">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title">Marketing</span>
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
							<i class="icon-group"></i> Leads
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="campaign.php">Campaigns</a>&nbsp;&nbsp;</li>
							<i class="icon-angle-right"></i>
							<li>&nbsp;<a href="#">Viewing Lead</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				
							<?php 

										$sql = mysqli_query($conn, "SELECT clead_idr, lcname_str, lcaddress_lng, lcwebsite_str, lsalutation_idr, lfirstname_str, lmiddle_str, llastname_str, ljob_title_str, ldepartment_str, lphone_str, lmobile_str, lemail_eml, lnotes_lng FROM tbl_leads WHERE tbl_leads.id= '".$id."'"); //You don't need a ; like you do in SQL
								$row= $sql->fetch_assoc();
								mysqli_close($conn); //Make sure to close out the database connection
							?>
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box red">
							<div class="portlet-title">
								<h4><i class="icon-reorder"></i><!--possible name--></h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
								</div>
							</div>
							<div class="portlet-body">
								 <div class="form-horizontal form-view">
                                    <h3 class="form-section">Company Details</h3>
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" for="firstName">Company Name: </label>
                                             <div class="controls">
												 <span class="text"><b><?=$row["lcname_str"]?></b></span>
                                             </div>
                                          </div>
                                       
                                
                                          <div class="control-group">
                                             <label class="control-label" for="lastName">Company Address: </label>
                                             <div class="controls">
                                                <span class="text"><b>
													 <?php
												if(empty($row['lcaddress_lng'])){
													echo"-";
												}
												else {
													echo ($row['lcaddress_lng']);
												}
												?>
													</span>
													</b></div>
                                          </div>
                                        <div class="control-group">
                                             <label class="control-label" >Website: </label>
                                             <div class="controls">
                                                <span class="text"><b>
													 <?php
												if(empty($row['lcwebsite_str'])){
													echo"-";
												}
												else {
													echo ($row['lcwebsite_str']);
												}
												?>
													</span> 
													</b></div>
                                          </div>
                                       <!--/span-->
                                    </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                       <h3 class="form-section">Company Representative</h3>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Salutation: </label>
                                             <div class="controls">
                                                <span class="text bold"><?=$row["lsalutation_idr"]?></span>
                                             </div>
                                          </div>
                                      
                                 
                           
                                          <div class="control-group">
                                             <label class="control-label">Name: </label>
                                             <div class="controls">
                                                <span class="text bold"><?=$row["lfirstname_str"]?> <?=$row["lmiddle_str"]?> <?=$row["llastname_str"]?></span>
                                             </div>
                                          </div>
                                       
                         
                                          <div class="control-group">
                                             <label class="control-label" >Job Title: </label>
                                             <div class="controls">
                                                <span class="text bold">
											 <?php
												if(empty($row['ljobtitle_str'])){
													echo"-";
												}
												else {
													echo ($row['ljobtitle_str']);
												}
												?>	 
                                            </span>
                                             </div>
                                          </div>
                                   
                                       
                                  
                          
                                          <div class="control-group">
                                             <label class="control-label" >Department: </label>
                                             <div class="controls">
                                                <span class="text bold">
											 <?php
												if(empty($row['ldepartment_str'])){
													echo"-";
												}
												else {
													echo ($row['ldepartment_str']);
												}
												?>	 
                                            </span>
                                             </div>
                                          </div>
                                
                              
                             
                                          <div class="control-group">
                                             <label class="control-label" >Phone: </label>
                                             <div class="controls">
                                                <span class="text bold">
											 <?php
												if(empty($row['lphone_str'])){
													echo"-";
												}
												else {
													echo ($row['lphone_str']);
												}
												?>	 
                                            </span>
                                             </div>
                                          </div>
                                     
                                     
                             
                             
                                          <div class="control-group">
                                             <label class="control-label" >Mobile Number: </label>
                                             <div class="controls">
                                                <span class="text bold">
												  <?php
												if(empty($row['lmobile_str'])){
													echo"-";
												}
												else {
													echo ($row['lmobile_str']);
												}
												?>
                                            </span>
                                             </div>
                                          </div>
                               
                                      
                                     
                                 
                                
                                          <div class="control-group">
                                             <label class="control-label" >Email Address: </label>
                                             <div class="controls">
                                                <span class="text bold"><b><?=$row["lemail_eml"]?></b></span>
                                             </div>
                                          </div>
                                   
                                     
                                
                      
                                          <div class="control-group">
                                             <label class="control-label" >Notes: </label>
                                             <div class="controls">
                                                <span class="text bold">
												  <?php
												if(empty($row['lnotes_lng'])){
													echo"-";
												}
												else {
													echo ($row['lnotes_lng']);
												}
												?>
                                            </span>
                                             </div>
                                          </div>
                                
                                     
                                    </div>
									 </div>
                                    <div class="form-actions">
                                       <a href="edit_lead.php?id=<?=$id?>"><button type="submit" class="btn red"><i class="icon-pencil"></i> Edit</button></a>
                                       <a><button type="button" class="btn btn-delete"><i class="icon-trash"></i> Delete</button></a>
                                       <a href="javascript:history.go(-1)"><button type="button" class="btn">Back</button></a>
                                    </div>
                                 </div>
								 </div>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
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
									 <script>
									   $(document).ready(function(){
										 $('.btn-delete').click(function(){
										var id1 = $('#id1').val();
									swal({
										  title: "Are you sure?",
										  text: "Once deleted, you will not be able to recover this lead!",
										  icon: "warning",
										  buttons: true,
										  dangerMode: true,
										})
										.then((willDelete) => {
										  if (willDelete) {
											window.location.href = 'delete_lead.php?id=' + id1; 
										  } else {
											window.location.href = 'view_lead.php?id=' + id1;
										  }
										});
																				 });

																			   });
										</script>
</body>
<!-- END BODY -->
</html>
