<?php 
include "connect.php";
session_start();
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
	<title>1Devs Inc. | Dashboard</title>
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
	<link rel="stylesheet" type="text/css" href="loader.css" />
	<link rel="shortcut icon" href="assets/img/LOGO.png" />
	<style>
			
.scrollspy-example {
    position: relative;
    height: 600px;
    margin-top: .5rem;
    overflow: hidden;
}
.scrollspy-example:hover{
		overflow-y: auto;
	}
	



:root {
	--scroll-bar-size: 10px;

	/**
   * Background color for custom scroll bars.
   * The color is applied to the thumb part of the scrollbar.
   */
	--scroll-bar-thumb-background-color: rgba(0, 0, 0, 0.2);
	/**
	* Background color for custom scroll bars in their active state.
	* The color is applied to the thumb part of the scrollbar.
	*/
	--scroll-bar-thumb-background-color-active: rgba(0, 0, 0, 0.5);
}

::-webkit-scrollbar {
	width: var(--scroll-bar-size);
	height: var(--scroll-bar-size);
	background: transparent;
	cursor: pointer;
}
::-webkit-scrollbar-thumb {
	background-color: var(--scroll-bar-thumb-background-color);
	border-radius: var(--scroll-bar-size);
	border-color: transparent;
	border-style: solid;
	border-width: calc(var(--scroll-bar-size)/3);
	background-clip: padding-box;
}
::-webkit-scrollbar-thumb:active {
	background-color: var(--scroll-bar-thumb-background-color-active);
}
::-webkit-scrollbar-thumb:hover,
::-webkit-scrollbar-thumb:active {
	border-width: 1px;
	background-color: var(--scroll-bar-thumb-background-color-active);
	cursor: pointer;
}
				
.breadcrumb a:hover{
		color: red;
	}
a, h4{
	color:black;
	font-weight: 600;
}
a:hover{
	color: red;
}
		
		
		
	.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 65px;
  margin: 5px;
  position: relative;
  width: 370px;
}
		.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

	
	</style>
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
<div class="fixed-top">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top" style="">
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
						<style>.username::first-letter{text-transform:uppercase;}</style><span class="" style="display:inline-block"><?=$_SESSION["uname"]?></span>
					
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
				<li class="start active">
					<a href="index_1.php">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="has-sub">
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
		
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						  
						<!-- END BEGIN STYLE CUSTOMIZER -->  
							<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							<h3><?php date_default_timezone_set("Asia/Manila"); $time=date("H:i");
							if($time>="06:00" && $time<"12:00"){
								echo "Good Morning ";
							}
							elseif($time>="12:00" && $time<"18:00"){
								echo "Good Afternoon ";
							}
							elseif($time>="18:00" && $time<="23:59"){
								echo "Good Evening ";
							}
							else{
								echo "Hello ";
							}
							?><span id="hello_name" style="display: inline-block" class="username"><?=$_SESSION["uname"]?></span></h3>						
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Dashboard</a></li>
							<li class="pull-right no-text-shadow">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
									<i class="icon-calendar"></i>
									<span></span>
									<i class="icon-angle-down"></i>
								</div>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="btn-group pull-right">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="icon-th"></i> Dashboard Options <i class="icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
<li><span style="visibility: hidden">abc</span></li>
										<li><label style="display:inline" for="swel">&nbsp;&nbsp;&nbsp;&nbsp;Show Welcome </label><input onClick="welcome()" id="swel" type="checkbox" value="" checked/>
										
										</li>
										<li></li>
										<li><span style="visibility: hidden">abc</span></li>
									</ul>
								</div>
						</div>
						<div style="padding:1%"></div> 
				
					<div id="welcomediv" class="well">
							<button class="close" data-dismiss="alert"></button>	
						<div class="row-fluid">
						<div class="span7">
						<h1>Welcome to your CRM</h1>
						<p style="font-size: 14px;padding: 3%">
							With CRM, you can store customer and prospect contact information, accounts, leads, and sales opportunities in one central location.
							<br><br>
							To help you get started,
							<ul>
								<li><a href="extra_profile.php">Manage Profile</a></li>
							</ul>
						</p>
							</div>
							<div class="span5 pull-left">	
						<img style="padding: 2%;" src="assets/img/crm.jpg" />
							</div>
					</div>
				</div>
					
					
					<div class="row-fluid">
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-circle-arrow-up"></i>
								</div>
								<div class="details">
									<div class="number">
									  
										  <?php
				$start = date('Y-m-d');
			$finish =date('Y-m-d', strtotime('-4 week'));
		$sql2 = mysqli_query($conn,"SELECT * FROM tbl_opportunities WHERE (close_date_dat BETWEEN '".$finish."' AND '".$start."')");
		$total=0;
		$total1=0;
		while($row2=$sql2->fetch_assoc()){
			if($row2["status_idr"]=="Won"){
			$total = $row2["total_value"] + $total;}
			elseif($row2["status_idr"]=="Lost"){
			$total1 = $row2["total_value"] + $total1;
			}
		}					


			echo "&#x20B1; ";
			if ($total > 999 && $total <= 999999) {
												$wheels1 = floor($total/ 1000) . ' K';
											} elseif ($total > 999999) {
												$wheels1 = floor($total/ 1000000) . ' M';
											} else {
												$wheels1 = $total;
											}
											echo $wheels1;
				?>
									</div>
									<div class="desc">									
										Total Profit
									</div>
								</div>
									<a href="#myModal4" data-toggle="modal" class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						
						<div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel44" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel44">Opportunities Won</h3>
									</div>
									<div class="modal-body">
								
									<?php 
								$sql10 = mysqli_query($conn, "SELECT * FROM tbl_opportunities WHERE tbl_opportunities.status_idr='Won'");
										while($row10=$sql10->fetch_assoc()){
											$sql11 = mysqli_query($conn, "SELECT * FROM tbl_account WHERE tbl_account.id = '". $row10["account_idr"]. "'");
											$row11 = $sql11->fetch_assoc();
											
										?>
											<p>
												<b><a href="view_account.php?id=<?=$row11["id"]?>"><?=$row11["account_name_str"]?></a></b><br>
												Name: <?=$row10["opportunity_name_str"]?><br>
												Close Date: <?=$row10["close_date_dat"]?><br>
												Total Value: 
													<?php
												if(empty($row10["total_value"])){
													echo("-");
												}else{
													echo "&#x20B1; " . $row10["total_value"];
												}
												
											?>
											</p>
										<?php }
										?>
								
								
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
						
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat red">
								<div class="visual">
									<i class="icon-circle-arrow-down"></i>
								</div>
								<div class="details">
									<div class="number">&#x20B1; <?php
										if ($total1 > 999 && $total1 <= 999999) {
												$wheels = floor($total1/ 1000) . ' K';
											} elseif ($total1 > 999999) {
												$wheels = floor($total1/ 1000000) . ' M';
											} else {
												$wheels = $total1;
											}
											echo $wheels;	?></div>
									<div class="desc">Total Lost</div>
								</div>
									<a href="#myModal3" data-toggle="modal" class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						
						<div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel33">Opportunities Lost</h3>
									</div>
									<div class="modal-body">
									<?php 
								$sql8 = mysqli_query($conn, "SELECT * FROM tbl_opportunities WHERE tbl_opportunities.status_idr='Lost'");
										while($row8=$sql8->fetch_assoc()){
											$sql9 = mysqli_query($conn, "SELECT * FROM tbl_account WHERE tbl_account.id = '". $row8["account_idr"]. "'");
											$row9 = $sql9->fetch_assoc();
											
										?>
											<p>
												<b><a href="view_account.php?id=<?=$row9["id"]?>"><?=$row9["account_name_str"]?></a></b><br>
												Name: <?=$row8["opportunity_name_str"]?><br>
												Close Date: <?=$row8["close_date_dat"]?><br>
												Total Value: 
													<?php
												if(empty($row8["total_value"])){
													echo("-");
												}else{
													echo "&#x20B1; " . $row8["total_value"];
												}
												
											?>
											</p>
										<?php }
										?>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
						
						
						<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-comments"></i>
								</div>
							<?php
								$sql3 = mysqli_query($conn, "SELECT * FROM tbl_campaign");
								$sql4 = mysqli_query($conn, "SELECT * FROM tbl_tasks WHERE tbl_tasks.task_status_idr = 'Completed'");
								$task_completed = mysqli_num_rows($sql4);		
								$campaign_numbers = mysqli_num_rows($sql3);
								?>
							
								<div class="details">
									<div class="number"><?=$campaign_numbers?></div>
									<div class="desc">Total Campaign</div>
								</div>
								<a href="#myModal1" data-toggle="modal" class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						
						<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel1">Campaign</h3>
									</div>
									<div class="modal-body">
										<?php 
										while($row3=$sql3->fetch_assoc()){ ?>
										<p><b><a href="view_campaign.php?id=<?=$row3["id"]?>"><?=$row3["campaign_name_str"]?></a></b></p>
										<p>	Status: <?=$row3["campaign_status_idr"]?><br>
											Type: <?=$row3["campaign_type_idr"]?><br>
											Date: <?=$row3["start_date_dat"]?> - <?=$row3["end_date_dat"]?><br>
											Budgeted Cost:
											<?php 
												if (empty($row3["budgeted_cost_cur"])){
													echo("-");
												}
												else{
													echo " &#x20B1; ". $row3["budgeted_cost_cur"];
												}
											
										?>
											 
											  
											  <br>
											Actual Cost: 
											<?php 
												if (empty($row3["actual_cost_cur"])){
													echo("-");
												}
												else{
													echo " &#x20B1; ". $row3["actual_cost_cur"];
												}
											
										?>
											<?php
												if($row3["budgeted_cost_cur"] < $row3["actual_cost_cur"]){?>
													<span class="label label-warning">Exceeded</span>
							<?php				}?>
											</p>
										<?php }
										
										?>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
						
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat yellow">
								<div class="visual">
									<i class="icon-ok-sign"></i>
								</div>
								<div class="details">
									<div class="number"><?=$task_completed?>
										
									
									</div>
									<div class="desc">Tasks Completed</div>
								</div>
								<a href="#modal2" data-toggle="modal" class="more" h>
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a> 						
							</div>
						</div>
					</div>
					
					<div id="modal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel22" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel22">Tasks Completed</h3>
									</div>
									<div class="modal-body">
										<?php 
											if ($task_completed == 0){?>
												 <span style="font-size: 24px;font-weight: 300">There are no completed tasks in the moment.</span>
											<?php }
									else{
										while($row4=$sql4->fetch_assoc()){ 
											$sql5 = mysqli_query($conn, "SELECT * FROM tbl_account WHERE tbl_account.id = '". $row4["account_idr"]. "'");
											$row5 = $sql5->fetch_assoc();
										?>	
												
											<p><b><a href="view_account.php?id=<?=$row5["id"]?>"><?=$row5["account_name_str"]?></a></b><br>
											
												Date: <?=$row4["task_date_dat"]?><br>
												Type: <?=$row4["task_type_idr"]?><br>
												Priority: 
												<?php
													switch($row4['priority_idr']){
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
													echo $row4['priority_idr'];
													}?>
												</p>  
											<?php }
										}
											?>
											
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
					
					
						<div class="row-fluid">
					<div class="span7">
					<div class="row-fluid">
						<div id="donutchart" style="width: 100%; height: 300px;"></div>
					</div>	
					<div class="row-fluid">
						<div id="line_top_x" style="width: 100%; height: 300px;"></div>
					</div>
					</div>
							<div class="span5">
					
								
					<!-- BEGIN BLOCKQUOTES PORTLET-->
							<div class="portlet">
								<div class="portlet-title">
									<h4><?php echo date("l") .",&nbsp;" . date("M");?>&nbsp;<?php echo date("d");?></h4>
								</div>
								<div class="portlet-body">
							<div  class="scrollspy-example"  >	
					<?php
						$taskdate = date("Y-m-d");
						$taskdate1 = date("Y-m-d h:i:sa");
						$sql1 = mysqli_query($conn, "SELECT tbl_account.account_name_str as account_name,tbl_account.id as account_id,tbl_tasks.id as tasks_id,priority_idr,task_date_dat,task_type_idr,task_status_idr,description_lng FROM tbl_tasks INNER JOIN tbl_account ON tbl_tasks.account_idr= tbl_account.id WHERE tbl_tasks.task_date_dat='".$taskdate."' OR (task_date_dat BETWEEN '".$taskdate."T00:00' AND '".$taskdate."T23:59')");
						$num_rows = mysqli_num_rows($sql1);
						if($num_rows>0){
						$ctr=0;
						while ($row1=$sql1->fetch_assoc()){?>
									<h3></h3>
									<blockquote id="taskn[<?=$ctr?>]">
										<p style="font-size: 14px;">
										<span style="font-weight: 600;font-size: 20px;"><?=$row1["account_name"];?></span>
												<br><span style="font-weight: 500;">Task Type: </span><?=$row1["task_type_idr"];?><br>
											<span style="font-weight: 500;">Priority:</span>
												<?php 
												switch($row1['priority_idr']){
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
													echo $row1['priority_idr'];
										
										}?>
												
										
										</p>
									</blockquote>
									
									
				
					<script>
						var a = document.getElementById("taskn[<?=$ctr?>]");
						var b = "<?php echo $row1['priority_idr'];?>";
						if (b == "Low"){
							a.style["border-left"] = "5px solid #35aa47";
						}
						else if (b == "Medium"){
							a.style["border-left"] = "5px solid #4d90fe";
						}
						else if (b == "High"){
							a.style["border-left"] = "5px solid #ffb848";
						}
						else if (b == "Urgent"){
							a.style["border-left"] = "5px solid #d84a38";
						}
						
					</script>	
					<?php $ctr++;} ?> </div>	<?php } else{?>
					
					<div id="no_events" class="row-fluid">
					<h3 style="color: #4D4848">No Events or Tasks Today</h3>
					</div> <?php }?>	
						</div>
					
											
											
							</div>		
									</div>
								</div>
								
								<div class="row-fluid">
								<span style="color: rgb(117, 117, 117); font-size: 14px; font-weight: 600;padding-bottom: 3%">Campaign Progress</span><br><br>
									<div id="campaignn" style="width: 100%;  min-height: 450px;
"></div>
			</div>
				
								
							</div>
							<br><br><br><br>
							<!-- END BLOCKQUOTES PORTLET-->
					
					
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
	
		<script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>	
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>	
	<script src="assets/flot/jquery.flot.js"></script>
	<script src="assets/flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="assets/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>	
	<script type="text/javascript" src="assets/js/jquery.pulsate.min.js"></script>
	<script src="assets/js/app.js"></script>				
	
	
	
	
		<script type="text/javascript" src="google.js"></script>
			<?php 
			$start = date('Y-m-d');
			$finish =date('Y-m-d', strtotime('-4 week'));
			 ?>

	  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart1);
      function drawChart1() {
      var data = google.visualization.arrayToDataTable([
		['Opportunity Income', 'Total Value'],
       <?php
		$sql2 = mysqli_query($conn,"SELECT * FROM tbl_opportunities WHERE (close_date_dat BETWEEN '".$finish."' AND '".$start."')");
		$total=0;
		$total1=0;
		while($row2=$sql2->fetch_assoc()){
			if($row2["status_idr"]=="Won"){
			$total = $row2["total_value"] + $total;}
			elseif($row2["status_idr"]=="Lost"){
			$total1 = $row2["total_value"] + $total1;
			}
		}					


			echo "['Opportunity/ies Won',".$total. "],";
			echo "['Opportunity/ies Lost'," .$total1. "]";
				?>
      ]);
        var options = {
          title: 'Opportunities Won/Lost <?php echo " from " . $finish ." to ". $start;?>',
          is3D: true,
          slices: {
            0: { color: 'green' },
            1: { color: 'red' }
          }
        };
		  

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
		  
	$(window).resize(function(){
	  drawChart1();
	});
    </script>
		
		
	
	
	<script>
	function welcome(){ 
	 
	 var x1 = document.getElementById("swel");
	 if (x1.checked == true){
		 document.getElementById("welcomediv").style.display = "block";

	 }
	 else {
		 document.getElementById("welcomediv").style.display = "none";
	 }	
		 
	}
		
	
	</script>	
	<script>
	      google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Task ID');
      data.addColumn('string', 'Campaign Name');
      data.addColumn('string', 'Type');
      data.addColumn('date', 'Start Date');
      data.addColumn('date', 'End Date');
      data.addColumn('number', 'Duration');
      data.addColumn('number', 'Percent Complete');
      data.addColumn('string', 'Dependencies');

      data.addRows([
		 <?php 
		$sql2 = mysqli_query($conn,"SELECT * FROM tbl_campaign");
		$ongoing=0;
		$not_started=0;
		$completed=0;
		while($row2=$sql2->fetch_assoc()){
				$date_today = date_create(date('Y-m-d'));//date_create("date('Y-m-d')");
				$start_date = date_create($row2["start_date_dat"]);;//date_create('$row2["start_date_dat"]');
				$end_date = date_create($row2["end_date_dat"]);//date_create('$row2["end_date_dat"]') ;
				$date_dif_start = date_diff($start_date,$date_today);
				$date_dif_end = date_diff($start_date,$end_date);
				
				$dates= $row2["start_date_dat"];
				$newdates= strtotime('-1month', strtotime($dates));
				$datee= $row2["end_date_dat"];
				$newdatee= strtotime('-1month', strtotime($datee));
				$views= date("Y,m,d", $newdates);
				$viewe= date("Y,m,d", $newdatee);
				
			if ( date("Y-m-d") >= $row2['start_date_dat'] && date("Y-m-d") < $row2['end_date_dat'] ){
				$percentage = ($date_dif_start->format("%a") / $date_dif_end->format("%a"))*100;
			}
			elseif ( date("Y-m-d") < $row2['start_date_dat']){
			 	$percentage = 0;
			}
			elseif (date("Y-m-d") >= $row2['end_date_dat']){
				$percentage = 100;
			}
							
			echo "['" .$row2["id"]."','" .$row2["campaign_name_str"]."','" .$row2["campaign_type_idr"]. "',new Date(".$views.  "),new Date(" .$viewe. "),null," .$percentage. ",null]," ;
		}
		 ?> 
       
      ]);

      var options = {
 		
       
        gantt: {
          trackHeight: 30,
			   title: 'Campaign Reports',
        }
      };
		
      var chart = new google.visualization.Gantt(document.getElementById('campaignn'));

      chart.draw(data, options);
    }
	$(window).resize(function(){
	  drawChart2();
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
			App.setPage("index_1");
			App.init();
		});
	</script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart3);
		
    function drawChart3() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Leads');
      data.addColumn('number', 'Contacts');

      data.addRows([
		  
		<?php 
		$month = date("m");
		$num_days = date("t");
		$ctr=1;
		while($ctr!=date("t")){
			if($ctr<10){
				$day = "0" . $ctr;
			}
			else{
				$day = $ctr;
			}
		$start = date("Y-$month-01");
		$finish =date("Y-$month-$num_days");
		$date1= date("Y-m-$day");
		$sql1 = mysqli_query($conn,"SELECT * FROM tbl_leads WHERE (ldate_added='".$date1."') AND (ldate_added BETWEEN '".$start."' AND '".$finish."')");
		$num_rows1= mysqli_num_rows($sql1);
							 
		$sql2 = mysqli_query($conn,"SELECT * FROM tbl_contacts WHERE (date_added='".$date1."') AND (date_added BETWEEN '".$start."' AND '".$finish."')");
		$num_rows2 = mysqli_num_rows($sql2);
			
		echo "[".$ctr."," .$num_rows1.",".$num_rows2."],";
		$ctr++;
		}
		mysqli_close($conn);
		  ?> 
      ]);

      var options = {
        chart: {
          title: 'Contacts and Leads Added for this month'
        },
        axes: {
          x: {
            0: {side: 'bottom'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
	$(window).resize(function(){
	  drawChart3();
	});
  </script>
<script>	  
$(window).load(function(){
     $('.loader').fadeOut();
});
</script>
	</div>
</body>
<!-- END BODY -->
</html>