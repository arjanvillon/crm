<?php
include "connect.php";
session_start();
header('Cache-Control: no-store, no-cache, must-revalidate'); ?>
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
	<title>1Devs Inc. | Opportunities</title>
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
						<li class="selected active"><a href="opportunities.php">Opportunities</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
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
							<i class="icon-trophy"></i> Opportunities
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Opportunities</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
			
			
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box red">
							<div class="portlet-title">
								<h4 style="color: #fff"><i class="icon-reorder"></i>Manage Opportunity</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
								</div>
							</div>
							<div class="portlet-body">
								<form action="delete_opportunity.php" method="post">
							<div class="portlet-body">
							<div class="btn-group pull-left">
									<a class="btn btn red" href="add_opportunity.php">
										<i class="icon-plus"></i> Add New 
									</a>
									</div>
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete3" class="btn button-next">
									</span>
								</div>
								<table class="table table-striped table-hover table-bordered" id="opportunity_table">
									<thead>
										<tr>
											<th style="resize: none; width: 25px;"> <!--<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />--></th>
											<th>Close Date</th>
											<th>Opportunity Name</th>
											<th class="hidden-480">Account Name</th>
											<th class="hidden-480">Forecast</th>
											<th>Status</th>
											<th>Total Value</th>
											<th class="hidden-480">Probability</th>
											
										
										</tr>
									</thead>
									<tbody>
										 <?php 
											$sql = mysqli_query($conn, "SELECT tbl_account.account_name_str, tbl_account.id as account_id , tbl_opportunities.id as opportunity_id,close_date_dat, opportunity_name_str, account_idr, forecast_idr, status_idr, total_value, tbl_opportunities.source_idr as source, probability_idr FROM tbl_opportunities INNER JOIN tbl_account ON tbl_opportunities.account_idr= tbl_account.id");
											while($row = $sql->fetch_assoc()){   ?>
											<tr class="odd gradeX">
											<td><input type="checkbox" name="ocheck[]" value="<?=$row["opportunity_id"]?>"/></td>
											<td><?=$row['close_date_dat']?></td>
											<td><a class="popovers" data-trigger="hover" data-placement="top" data-content="Edit this opportunity" href="view_opportunity.php?id=<?=$row['opportunity_id']?>"> <?=$row["opportunity_name_str"]?></a></td>
											<td class="hidden-480"><a class="popovers" data-trigger="hover" data-placement="top" data-content="View this account" href="view_account.php?id=<?=$row["account_id"]?>"><?=$row['account_name_str']?></a></td>
											<td class="hidden-480 center"> <?=$row['forecast_idr']?></td>
											<td class="center"> <?=$row['status_idr']?></td>
											<td class="center">
											<?php
											if(empty($row['total_value'])){
													echo"-";
												}
												else {
													echo "₱ ". ($row['total_value']);
												}
											?>
											</td>
											<td class="hidden-480 center"> <?=$row['probability_idr']?> %</td>
											</tr> <?php
											}

											mysqli_close($conn);
											?>
									
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
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
    $('#opportunity_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>		
	<script>
		jQuery(document).ready(function() { 
		$('input[type=submit]').click(function(){
			  $('.loader').fadeIn();
		}); 			
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
