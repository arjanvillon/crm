<?php 
	session_start();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	echo '<input type="hidden" id="id1" value="'.$id.'"/>';
	header('Cache-Control: no-store, no-cache, must-revalidate');
	include "connect.php";

	$result1 = mysqli_query($conn, "SELECT tbl_campaign.campaign_name_str, tbl_campaign.id as campaign_id, tbl_leads.id as lead_id, clead_idr, lcname_str, lcaddress_lng, lcwebsite_str, lsalutation_idr, lfirstname_str, lmiddle_str, llastname_str, ljob_title_str, ldepartment_str, lphone_str, lmobile_str, lemail_eml, lnotes_lng FROM tbl_leads INNER JOIN tbl_campaign ON tbl_leads.clead_idr= tbl_campaign.id WHERE tbl_campaign.id='".$id."'");
	$num_rows1 = mysqli_num_rows($result1);
									
	$result = mysqli_query($conn, "SELECT tbl_campaign.id as campaign_id, tbl_account.account_name_str, tbl_account.id as account_id, tbl_contacts.id as contact_id, job_title_str, first_str, account_idr, email_eml, tbl_contacts.phone_str as contact_phone, mobile_str, department_str FROM tbl_contacts INNER JOIN tbl_account ON tbl_contacts.account_idr= tbl_account.id INNER JOIN tbl_campaign ON tbl_account.campaign_idr=tbl_campaign.id WHERE tbl_campaign.id='".$id."'");
	$num_rows = mysqli_num_rows($result);

	$total_rows= $num_rows + $num_rows1;
	$sql0 = "UPDATE tbl_campaign SET lead_ctr= '".$num_rows1."', contact_ctr= '".$num_rows."', total_lead_contact_ctr= '". $total_rows."' WHERE tbl_campaign.id='".$id."'";
	mysqli_query($conn,$sql0);
								

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
							<i class="icon-inbox"></i> Campaign
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
							<li><a href="#">View Campaigns</a></li>
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
								<h4><i class="icon-reorder"></i><!--possible name--></h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
								</div>
							</div>
							
							
							<div class="portlet-body">
								<div class="accordion" id="accordion1">
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
											
												<h4>Details</h4>
											</a>
										</div>
										<div id="collapse_1" class="accordion-body collapse in">
											<div class="accordion-inner">
												
				<?php 

											$sql = mysqli_query($conn, "SELECT tbl_owner.display_name_str as owner, tbl_owner.id as owner_id, tbl_campaign.id as campaign_id, campaign_name_str, campaign_type_idr, campaign_status_idr, start_date_dat, end_date_dat, budgeted_cost_cur, actual_cost_cur, active_bol, drip_feed_bol, owner_idr FROM tbl_campaign INNER JOIN tbl_owner ON tbl_campaign.owner_idr= tbl_owner.id WHERE tbl_campaign.id=$id");//You don't need a ; like you do in SQL
											$row= $sql->fetch_assoc();
							?>
							<div class="portlet-body">
								 <div class="form-horizontal form-view">
                                    <h3 class="form-section">View Campaign Info</h3>
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label">Campaign Name:</label>
                                             <div class="controls">
												 <span class="text"><b><?=$row["campaign_name_str"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label">Drip Feed:</label>
                                             <div class="controls">
                                                <span class="text"><b><?php if($row["drip_feed_bol"]=1){
																		echo "Yes";}
																		else{
																			echo "No";
																		}
																	 ?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Campaign Type:</label>
                                             <div class="controls">
                                                <span class="text"><b><?=$row["campaign_type_idr"]?></b></span> 
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Owner:</label>
                                             <div class="controls">
                                                <span class="text"><b><?=$row["owner"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->        
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Campaign Status:</label>
                                             <div class="controls">
                                                <span class="text"><b><?=$row["campaign_status_idr"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" ></label>
                                             <div class="controls">                                                
                                                <span class="text"><b><!--the blank--></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row--> 
                                         <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Start Date:</label>
                                             <div class="controls">
                                                <span class="text"><b><?=$row["start_date_dat"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
         
                                       <!--/span-->
                                    </div>
                                    <!--/row--> 
                                                                 
                                         <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >End Date:</label>
                                             <div class="controls">
                                                <span class="text "><b><?=$row["end_date_dat"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                   
                                    </div>
                                    <!--/row-->   
                                                                                            
                                          <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Budgeted Cost:</label>
                                             <div class="controls">
                                                <span class="text "><b>
                                                 <?php
												if(empty($row['budgeted_cost_cur'])){
													echo"-";
												}
												else {
													echo "&#8369;" . ($row['budgeted_cost_cur']);
												}
												?>
                                               </b></span>
                                             </div>
                                          </div>
                                       </div>
                               
                                    </div>
                                    <!--/row-->   
                                        <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Actual Cost:</label>
                                             <div class="controls">
                                                <span class="text"><b>
											 <?php
												if(empty($row['actual_cost_cur'])){
													echo"-";
												}
												else {
													echo "&#8369;" . ($row['actual_cost_cur']);
												}
												?>		
                                            </b></span>
                                             </div>
                                          </div>
                                          
                                          
                                          
                                          
                                       </div>
                           
                                     
                                    </div>
                                    <!--/row-->  
                                                                                                         
                                  
                                   
                                   
                                   
                                    <!--/row-->           
                                   
                              
                                 </div>
								
							
							
							
												</div>
												
												
											</div>
											
											      <div class="form-actions">
                                       <a href="edit_campaign.php?id=<?=$id?>"><button type="submit" class="btn red"><i class="icon-pencil"></i> Edit</button></a>
                                       <a><button type="button" class="btn btn-delete"><i class="icon-trash"></i> Delete</button></a>
                                    </div>
											
											</div>
									</div><!--main close-->
									
									
									
									
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
											
												<h4>Campaign Stages</h4>
											</a>
										</div>
										<div id="collapse_2" class="accordion-body collapse in">
											<div class="accordion-inner">
												
									
												<form action="delete_campaign_stage.php" method="post">
							<div class="portlet-body">
							<div class="btn-group pull-left">
									<a class="btn btn red" href="add_campaign_stages.php?id=<?=$id?>">
										<i class="icon-plus"></i> Add New 
									</a>
									</div>
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete7" class="btn button-next">
									</span>
								</div>
								
								<table class="table table-striped table-hover table-bordered" id="view_camp_stages_table">
									<thead>
										<tr>
										<th style="width:25px;resize: none;"><!--<input id="myswitch"  onClick="mycols()" type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />--></th>
											<th>Campaign Stage Name</th>								
											<th>Default Activity Status</th>
											<th>Campaign Stage Status</th>
											
										
										</tr>

									</thead>
									<?php 

										$sql = mysqli_query($conn, "SELECT tbl_campaign.id as c_id, tbl_campaign_stage.id as cstage_id, cs_id, campaign_stage_name_str, campaign_stage_order_str, campaign_stage_status_idr, default_activity_status_idr, cs_email_eml, csnotes_lng FROM tbl_campaign_stage INNER JOIN tbl_campaign ON tbl_campaign_stage.cs_id=tbl_campaign.id WHERE tbl_campaign.id='".$id."'");
										
										while($row=$sql->fetch_assoc()){   //Creates a loop to loop through results
										?><tr class="odd gradeX">
									
										<td>
										<input type="checkbox" name="cscheck[]" value="<?=$row["cstage_id"]?>"</td>
										<td><a href="view_campaign_stages.php?id=<?=$row['cstage_id']?>" class="popovers" data-trigger="hover" data-placement="top" data-content="View campaign stage" href="view_contact.php?id=<?=$row["contact_id"]?>"><?=$row["campaign_stage_name_str"]?></td>
										<td><?=$row["default_activity_status_idr"]?></td>
										<td class="center"><?=$row["campaign_stage_status_idr"]?></td>
										
										
										</tr>
										<?php //$row["index"] the index here is a field name
										}

										?>
							
									
								</table>
							</div>
											</form>
											</div>
										</div>
									</div><!--accrodion-group end-->
									
									
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3">
											
												<h4>Leads</h4>
											</a>
										</div>
										<div id="collapse_3" class="accordion-body collapse in">
											<div class="accordion-inner">
												
									
												<form action="delete_campaign_leads.php" method="post">
							<div class="portlet-body">
							<div class="btn-group pull-left">
									<a class="btn btn red" href="add_lead.php?id=<?=$id?>">
										<i class="icon-plus"></i> Add New 
									</a>
									</div>
							<!--wala tong add new-->
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete8" class="btn button-next">
									</span>
								</div>
								
								<table class="table table-striped table-hover table-bordered" id="view_camp_leadss_table">
									<thead>
										<tr>
										<th  style="width:25px;resize: none;"><!--<input id="myswitch"  onClick="mycols()" type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />--></th>
											<th>Company Name</th>								
											<th>Representative</th>
											<th class="hidden-480">Job Title</th>
											<th>Phone</th>
											<th class="hidden-480">Email</th>
											
										
										</tr>

									</thead>
									<tbody>
									<?php 

										$sql = mysqli_query($conn, "SELECT tbl_campaign.campaign_name_str, tbl_campaign.id as campaign_id, tbl_leads.id as lead_id, clead_idr, lcname_str, lcaddress_lng, lcwebsite_str, lsalutation_idr, lfirstname_str, lmiddle_str, llastname_str, ljob_title_str, ldepartment_str, lphone_str, lmobile_str, lemail_eml, lnotes_lng FROM tbl_leads INNER JOIN tbl_campaign ON tbl_leads.clead_idr= tbl_campaign.id WHERE tbl_campaign.id='".$id."'");//You don't need a ; like you do in SQL
										
										while($row=$sql->fetch_assoc()){   //Creates a loop to loop through results
										?><tr class="odd gradeX">
									
										<td>
										<input type="checkbox" name="lcheck[]" value="<?=$row["lead_id"]?>"> </td>
										<td><?=$row["lcname_str"]?></td>
										<td><a class="popovers" data-trigger="hover" data-placement="top" data-content="Edit this lead" href="view_lead.php?id=<?=$row['lead_id']?>"><?=$row["lfirstname_str"]?> <?=$row["llastname_str"]?></a></td>
										<td class="center hidden-480">
										<?php
											if(empty($row["ljob_title_str"])){
												echo("-");
											}
											else{
												echo($row["ljob_title_str"]);
											}
										?>
										</td>
										<td class="center">
										<?php
											if(empty($row["lphone_str"])){
												echo("-");
											}
											else{
												echo($row["lphone_str"]);
											}
										?>
										</td>
										<td class="center hidden-480"><?=$row["lemail_eml"]?></td>
										</tr>
										<?php //$row["index"] the index here is a field name
										}

										?>
							
									</tbody>
								</table>
							</div>
											</form>
											</div>
										</div>
									</div><!--accrodion-group end-->
									
						
									
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4">
											
												<h4>Contacts</h4>
											</a>
										</div>
										<div id="collapse_4" class="accordion-body collapse in">
											<div class="accordion-inner">
												
									
												<form action="delete_contact.php" method="post">
							<div class="portlet-body">
							
							<!--wala tong add new-->
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete8" class="btn button-next">
									</span>
								</div>
								
								<table class="table table-striped table-hover table-bordered" id="view_camp_con_table" >
									<thead>
										<tr>
										<th style="width: 25px;resize: none "><!--<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />--></th>
											<th>Job Title</th>								
											<th>Name</th>
											<th class="hidden-480">Account Name</th>
											<th>Email</th>
											<th >Phone</th>
											<th class="hidden-480">Mobile Number</th>
											<th class="hidden-480">Department</th>
										
										</tr>
									</thead>
									<tbody id="tbodycontact">
									<?php 

										$sql = mysqli_query($conn, "SELECT tbl_campaign.id as campaign_id, tbl_account.account_name_str, tbl_account.id as account_id, tbl_contacts.id as contact_id, job_title_str, first_str, last_str, account_idr, email_eml, tbl_contacts.phone_str as contact_phone, mobile_str, department_str FROM tbl_contacts INNER JOIN tbl_account ON tbl_contacts.account_idr= tbl_account.id INNER JOIN tbl_campaign ON tbl_account.campaign_idr=tbl_campaign.id WHERE tbl_campaign.id='".$id."'");//You don't need a ; like you do in SQL

										while($row=$sql->fetch_assoc()){  ?> 
										<tr class="odd gradeX">
										<td><input type="checkbox" name="ccheck[]" value="<?=$row["contact_id"]?>"</td>
										<td>
										<?php
											if(empty($row["job_title_str"])){
												echo("-");
											}
											else{
												echo($row["job_title_str"]);
											}
										?>
										</td>
										<td><a class="popovers" data-trigger="hover" data-placement="top" data-content="Edit this contact" href="view_contact.php?id=<?=$row["contact_id"]?>"><?=$row["first_str"]?> <?=$row["first_str"]?></td>
										<td class="hidden-480"><a class="popovers" data-trigger="hover" data-placement="top" data-content="View this account" href="view_account.php?id=<?=$row["account_id"]?>"> <?=$row['account_name_str']?></a></td>
										<td class="center">
										<?php
											if(empty($row["email_eml"])){
												echo("-");
											}
											else{
												echo($row["email_eml"]);
											}
										?>
										</td>
										<td class="center">
										<?php
											if(empty($row["contact_phone"])){
												echo("-");
											}
											else{
												echo($row["contact_phone"]);
											}
										?>
										</td>
										<td class="center">
										<?php
											if(empty($row["mobile_str"])){
												echo("-");
											}
											else{
												echo($row["mobile_str"]);
											}
										?>
										</td>
										<td>
										<?php
											if(empty($row["department_str"])){
												echo("-");
											}
											else{
												echo($row["department_str"]);
											}
										?>
										</td>
										</tr> <?php
										}


										?>
									</tbody>
								</table>
							</div>
											</form>
											</div>
										</div>
									</div>
									
									
										
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_5">
											
												<h4>Opportunities</h4>
											</a>
										</div>
										<div id="collapse_5" class="accordion-body collapse in">
											<div class="accordion-inner">
												
									
												<form action="delete_opportunity.php" method="post">
							<div class="portlet-body">
							<!--wala tong add new-->
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete3" class="btn button-next">
									</span>
								</div>
								
								<table class="table table-striped table-hover table-bordered" id="view_camp_opp_table">
									<thead>
										<tr>
											<th  style="width:25px;resize: none;"> <!--<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />--></th>
											<th>Close Date</th>
											<th>Opportunity Name</th>
											<th class="hidden-480">Account Name</th>
											<th class="hidden-480">Forecast</th>
											<th class="hidden-480">Status</th>
											<th>Total Value</th>
											<th class="hidden-480">Probability</th>
											<th class="hidden-480">Source</th>
										
										</tr>
									</thead>
									<tbody>
										 <?php 

											$sql = mysqli_query($conn, "SELECT tbl_account.account_name_str, tbl_account.id as account_id , tbl_opportunities.id as opportunity_id,close_date_dat, opportunity_name_str, account_idr, forecast_idr, status_idr, total_value, tbl_opportunities.source_idr as source, probability_idr FROM tbl_opportunities INNER JOIN tbl_account ON tbl_opportunities.account_idr= tbl_account.id WHERE tbl_opportunities.campaign_idr='".$id."'"); //You don't need a ; like you do in SQL

											while($row = $sql->fetch_assoc()){   ?>
											<tr class="odd gradeX">
											<td><input type="checkbox" name="ocheck[]" value="<?=$row["opportunity_id"]?>"/></td>
											<td><?=$row['close_date_dat']?></td>
											<td><a class="popovers" data-trigger="hover" data-placement="top" data-content="Edit this opportunity" href="view_opportunity.php?id=<?=$row["opportunity_id"]?>"> <?=$row['opportunity_name_str']?></a></td>
											<td class="hidden-480"><a class="popovers" data-trigger="hover" data-placement="top" data-content="View this account" href="view_account.php?id="<?=$row["account_id"]?>><?=$row['account_name_str']?></a></td>
											<td class="hidden-480 center"> <?=$row['forecast_idr']?></td>
											<td class="hidden-480 center"> <?=$row['status_idr']?></td>
											<td class="center">
											<?php
											if(empty($row["total_value"])){
												echo("-");
											}
											else{
												echo "₱ " . ($row["total_value"]);
											}
											?>	
											</td>
											<td class="hidden-480 center"> <?=$row['probability_idr']?> %</td>
											<td class="hidden-480"> <?=$row['source']?></td>
											</tr> <?php //$row['index'] the index here is a field name
											}

											mysqli_close($conn); //Make sure to close out the database connection
											?>
									
									</tbody>
								</table>
							</div>
											</form>
											</div>
										</div>
									</div><!--accrodion-group end-->
									
									
									
									
									
									
											</div>
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
			$(".loader").fadeOut();
		});
		</script>
	<script>
	$(document).ready(function() {
    $('#view_camp_stages_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>
	<script>
	$(document).ready(function() {
    $('#view_camp_con_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>
	<script>
	$(document).ready(function() {
    $('#view_camp_opp_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>

	<script>
	$(document).ready(function() {
    $('#view_camp_leadss_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>
	
									<script>
									   $(document).ready(function(){
										 $('.btn-delete').click(function(){
										var id1 = $('#id1').val();
									swal({
										  title: "Are you sure?",
										  text: "Once deleted, you will not be able to recover this campaign!",
										  icon: "warning",
										  buttons: true,
										  dangerMode: true,
										})
										.then((willDelete) => {
										  if (willDelete) {
											window.location.href = 'delete_campaign.php?id=' + id1; 
										  } else {
											window.location.href = 'view_campaign.php?id=' + id1;
										  }
										});
																				 });

																			   });
										</script>
</body>
<!-- END BODY -->
</html>
