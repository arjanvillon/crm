<?php 
session_start();
include "connect.php";
header('Cache-Control: no-store, no-cache, must-revalidate'); ?>
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
	<title>1Devs Inc. | Tasks</title>
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
				<li class="active has-sub">
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title start active">Sales</span>
					<span class="selected"></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="accounts.php">Accounts</a></li>
						<li ><a href="contacts.php">Contacts</a></li>
						<li ><a href="opportunities.php">Opportunities</a></li>
						<li class="selected active"><a href="tasks.php">Tasks</a></li>
						<li ><a href="reportss.php">Reports</a></li>
					</ul>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title">Marketing</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
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
							<i class="icon-inbox"></i> Tasks
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Tasks</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<form action="delete_task.php" method="post">
						<div class="portlet box red">
							<div class="portlet-title">
								<h4 style="color: #fff"><i class="icon-reorder"></i>Manage Tasks</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
									<!--<div class="btn-group">
									<a href="add_task.php" class="btn btn red">
										<i class="icon-plus"></i> Add New 
										</a>
									</div>-->
									<div class="btn-group pull-left">
									<input id="delete5" type="submit" value="Delete" name="delete5" class="btn button-next">
									<i class="m-icon-swapright m-icon-white"></i>
									</div>
								</div>
								
								<table class="table table-striped table-hover table-advance table-bordered" id="task_table">
									<thead>
										<tr>
										<tr>
										<th style="resize: none; width: 25px;"><!--<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />--></th>
											<th>Priority</th>
											<th>Task Date</th>
											<th class="hidden-480">Account Name</th>
											<th class="hidden-480">Task Type</th>
											<th>Task Status</th>
											<th class="hidden-480">Description</th>
											<th class="hidden-480">Owner</th>
										</tr>
									</thead>
									<tbody>
										<?php 

										$sql = mysqli_query($conn, "SELECT tbl_account.account_name_str, 
										tbl_account.id as account_id,
										tbl_tasks.id as tasks_id,
										priority_idr,
										task_date_dat,
										task_type_idr,
										task_status_idr,
										description_lng,
										tbl_owner.display_name_str as owner1,
										tbl_tasks.owner_idr as owner
										FROM tbl_tasks 
										INNER JOIN tbl_account ON tbl_tasks.account_idr= tbl_account.id INNER JOIN tbl_owner ON tbl_tasks.owner_idr= tbl_owner.id ");//You don't need a ; like you do in SQL

										while($row=$sql->fetch_assoc()){   //Creates a loop to loop through results
										echo "<tr class='odd gradeX'>
										<td><input type='checkbox' name='tcheck[]' class='checkboxes' value='".$row['tasks_id']."' /></td>
										<td>"; 
											switch($row['priority_idr']){
											case "Low":
												echo "<span class='btn green mini'>Low</span>";
													break;
											case "Medium":
												echo "<span class='btn blue mini'>Med</span>";
													break;
											case "High":
												echo "<span class='btn yellow mini'>High</span>";
													break;
											case "Urgent":
												echo "<span class='btn red mini'>Urgent</span>";
													break;
													
												default:
													echo $row['priority_idr'];
										
										}
											
											
											
										echo "</td>
										<td class='highlight'>";
											if($row['task_date_dat'] < date('Y-m-d')){
												echo "<div class='important'></div>&nbsp;&nbsp;" . $row['task_date_dat'] . "</td>";
											} elseif($row['task_date_dat'] == date('Y-m-d')){
												echo "<div class='warning'></div>&nbsp;&nbsp;" . $row['task_date_dat'] . "</td>";
											} elseif ($row['task_date_dat'] > date('Y-m-d')){
												echo "<div class='success'></div>&nbsp;&nbsp;" . $row['task_date_dat'] . "</td>";
											}
	
										echo "
										<td class='hidden-480'><a  class='popovers' data-trigger='hover' data-placement='top' data-content='View this account' href='view_account.php?id=".$row["account_id"]."'>" . $row['account_name_str'] .  "</a></td>
										<td class='center hidden-480'>" . $row['task_type_idr'] . "</td>
										<td class='center'>";
											if (empty($row['task_status_idr'])){
												echo "-";
											}
											else{
											 echo ($row['task_status_idr'] );	
											}
											
											
											echo "</td>
										<td class='center hidden-480'>";
											if (empty($row['description_lng'])){
												echo "-";
											}
											else{
											 echo ($row['description_lng'] );	
											}
											
											echo "</td>
										<td class='hidden-480'>" . $row['owner1'] . "</td>
										</tr>";  //$row['index'] the index here is a field name
										}


										mysqli_close($conn); //Make sure to close out the database connection
										?>
									</tbody>
								</table>
							</div>
						</div>
						</form>
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
	$(document).ready(function() {
    $('#task_table').DataTable( {
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
		$(".loader").fadeOut();
	});
	</script>
</body>
<!-- END BODY -->
</html>
