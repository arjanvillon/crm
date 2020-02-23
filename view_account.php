<?php 
	session_start();
	include "connect.php";
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	echo '<input type="hidden" id="id1" value="'.$id.'"/>';
	header('Cache-Control: no-store, no-cache, must-revalidate');

	$result1 = mysqli_query($conn, "SELECT tbl_account.id, account_id, adate_dat, allday_bol, atype_idr, adescription_lng FROM tbl_activity INNER JOIN tbl_account ON tbl_activity.account_id = tbl_account.id WHERE tbl_account.id='".$id."'");
	$num_rows1 = mysqli_num_rows($result1);

	$result2 = mysqli_query($conn, "SELECT tbl_account.id, account_idr, task_date_dat, allday_task_bol, priority_idr, task_status_idr, task_type_idr, tbl_tasks.owner_idr as owner, description_lng FROM tbl_tasks INNER JOIN tbl_account ON tbl_tasks.account_idr = tbl_account.id WHERE tbl_account.id='".$id."'");
	$num_rows2 = mysqli_num_rows($result2);
	$total0=0;
	while($row=$result2->fetch_assoc()){ 
			if($row["task_status_idr"]=="Completed"){
			$total0= $total0 + 1;//$row['index'] the index here is a field name
						}
				}

	$sql0 = "UPDATE tbl_account SET activity_ctr= '".$num_rows1."', task_ctr= '".$num_rows2."', task_completed_ctr= '".$total0."' WHERE tbl_account.id='".$id."'";
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
	<title>1Devs Inc. | Accounts</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/metro.css" rel="stylesheet" />
			<link href="assets/glyphicons/css/glyphicons.css" rel="stylesheet" />
	<link href="assets/glyphicons_halflings/css/halflings.css" rel="stylesheet" />
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
				<li class="active has-sub">
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title start active">Sales</span>
					<span class="selected"></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li class="selected active" ><a href="accounts.php">Accounts</a></li>
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
							<i class="icon-briefcase"></i> Accounts
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="accounts.php">Accounts</a>
							<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Viewing Account</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN ACCORDION PORTLET-->
						<div class="portlet box red">
							<div class="portlet-title">
								<h4><i class="icon-reorder"></i><!--kung ano gusto mo--></h4>
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
											$sql = mysqli_query($conn, "SELECT tbl_owner.display_name_str as owner, tbl_owner.id as owner_id, account_name_str, address_lng, city_str, postcode_int,  country_idr, phone_str, website_str, campaign_idr, notes_lng, account_type_idr, tbl_account.owner_idr as owner1, source_idr, sector_idr FROM tbl_account INNER JOIN tbl_owner ON tbl_account.owner_idr= tbl_owner.id WHERE tbl_account.id=$id");//You don't need a ; like you do in SQL
											$row= $sql->fetch_assoc();
											?>
							<div class="portlet-body">
								 <div class="form-horizontal form-view">
                                    <h3 class="form-section">View Account Info</h3>
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" for="firstName">Account Name:</label>
                                             <div class="controls">
												 <span class="text"><b><?=$row["account_name_str"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" for="lastName">Type:</label>
                                             <div class="controls">
                                                <span class="text"><b>
											 <?php
												if(empty($row['account_type_idr'])){
													echo"-";
												}
												else {
													echo ($row['account_type_idr']);
												}
												?>		
                                            
                                            </b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Address Line:</label>
                                             <div class="controls">
                                                <span class="text"><b>
                                                <?php
												if(empty($row["address_lng"])){
													echo"-";
												}
												else {
													echo ($row["address_lng"]);
												}
											?>
                                                </b></span> 
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
                                             <label class="control-label" >City:</label>
                                             <div class="controls">
                                                <span class="text"><b>
                                                <?php
												if(empty($row['city_str'])){
													echo"-";
												}
												else {
													echo ($row['city_str']);
												}
												?>
                                                </b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Source:</label>
                                             <div class="controls">                                                
                                                <span class="text"><b>
												 <?php
												if(empty($row['source_idr'])){
													echo"-";
												}
												else {
													echo ($row['source_idr']);
												}
												?>	
                                            </b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row--> 
                                         <div class="row-fluid">
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Sector:</label>
                                             <div class="controls">                                                
                                                <span class="text"><b>
                                                <?php
												if(empty($row['sector_idr'])){
													echo"-";
												}
												else {
													echo ($row['sector_idr']);
												}
												?>
                                            	</b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row--> 
                                                                 
                                         <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Postcode/Zip:</label>
                                             <div class="controls">
                                                <span class="text"><b>
                                                <?php
												if(empty($row['postcode_int'])){
													echo"-";
												}
												else {
													echo ($row['postcode_int']);
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
                                             <label class="control-label" >Country:</label>
                                             <div class="controls">
                                                <span class="text"><b><?=$row["country_idr"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->   
                                        <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Phone:</label>
                                             <div class="controls">
                                                <span class="text"><b>
                                                	 <?php
												if(empty($row['phone_str'])){
													echo"-";
												}
												else {
													echo ($row['phone_str']);
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
                                             <label class="control-label" >Website:</label>
                                             <div class="controls">
                                                <span class="text"><b>
                                                	 <?php
												if(empty($row['website_str'])){
													echo"-";
												}
												else {
													echo ($row['website_str']);
												}
												?>
                                                </b></span>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->
                                    <div style="padding-bottom: 5%"></div>                                                             <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Campaign:</label>
                                             <div class="controls">
                                                <span class="text"><b>
                                                <?php 
													$sql = mysqli_query($conn,"SELECT * FROM tbl_campaign WHERE id='".$row['campaign_idr']."'");
													while($row1 = $sql->fetch_assoc()){
													 if($row1['campaign_name_str']!=NULL){
														 echo $row1['campaign_name_str'];
													 } else {
														 echo "none";
													 }
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
                                             <label class="control-label" >Notes:</label>
                                             <div class="controls">
												 <span class="text"><b>
												 	 <?php
												if(empty($row['notes_lng'])){
													echo"-";
												}
												else {
													echo ($row['notes_lng']);
												}
												?>
												 </b></span>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->                                                                                                                                                                                                     
                                                                                                
                                                                                                                              
                                                                                               
                                  
											</div>
											
											
											
											
										</div>
										
										
										
									</div>
									     <div class="form-actions">
                                       <a href="edit_account.php?id=<?=$id?>"><button type="submit" class="btn red"><i class="icon-pencil"></i> Edit</button></a>
                                       <a><button type="button" class="btn btn-delete"><i class="icon-trash"></i> Delete</button></a>
                                   	   </div>                                                                                
									
									
										</div>
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
											
												<div class="row-fluid">
											<div class="span6">
												<h4>Contacts</h4>
												
												</div>
											<div class="span6">
												<h4 class="pull-right">
													<span id="records"></span>
												</h4>
												</div></div>
												
											</a>
										</div>
										<div id="collapse_2" class="accordion-body collapse in">
										
										
				
							<div class="accordion-inner">
									<form action="delete_contact.php" method="post">
							<div class="portlet-body">
							<div class="btn-group pull-left">
									<a class="btn btn red" href="add_contact2.php?id=<?=$id?>">
										<i class="icon-plus"></i> Add New 
									</a>
									</div>
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input id="deletechk"  type="submit" value="Delete" name="delete2" class="btn button-next">
									</span>
								</div>
								
								<table class="table table-striped table-hover table-bordered" id="view_acc_con_table">
									<thead>
										<tr>
										<th style="width:25px; resize: none;"><!--<input id="myswitch"  onClick="mycols()" type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />--></th>
											<th>Job Title</th>								
											<th>Name</th>
											<th>Email</th>
											<th class="hidden-480">Phone</th>
											<th class="hidden-480">Mobile Number</th>
											<th style="width: auto" class="hidden-480">Decision Maker</th>
											<th class="hidden-480">Hold</th>
										
										</tr>

									</thead>
									<?php 
										$total2=0;			 		
										$sql1 = mysqli_query($conn, "SELECT tbl_account.account_name_str, tbl_account.id as account_id, tbl_contacts.id as contact_id, job_title_str, first_str, last_str, account_idr, email_eml, tbl_contacts.phone_str as contact_phone, mobile_str, department_str, decision_bol, hold_bol FROM tbl_contacts INNER JOIN tbl_account ON tbl_contacts.account_idr= tbl_account.id WHERE tbl_account.id='".$id."'");//You don't need a ; like you do in SQL
										
										while($row=$sql1->fetch_assoc()){   //Creates a loop to loop through results
										?><tr class="odd gradeX">
									
										<td>
										<input onClick="abc()" id="checks" type="checkbox" name="ccheck[]" value="<?=$row["contact_id"]?>"</td>
										<td>
										<?php
											if (empty($row['job_title_str'])){
												echo "-";
											}
											else{
											 echo ($row['job_title_str'] );	
											}
										?>
										</td>
										<td><a class="popovers" data-trigger="hover" data-placement="top" data-content="Edit this contact" href="view_contact.php?id=<?=$row["contact_id"]?>"><?=$row["first_str"]?> <?=$row["last_str"]?></td>
										<td class="center">
										<?php
											if (empty($row['email_eml'])){
												echo "-";
											}
											else{
											 echo ($row['email_eml'] );	
											}
										?>
										</td>
										<td class="hidden-480">
										<?php
											if (empty($row['contact_phone'])){
												echo "-";
											}
											else{
											 echo ($row['contact_phone'] );	
											}
										?>
										</td>
										<td class="center hidden-480">
										<?php
											if (empty($row['mobile_str'])){
												echo "-";
											}
											else{
											 echo ($row['mobile_str'] );	
											}
										?></td>
										<td style="width: auto" class=" hidden-480"><?php
											if($row['decision_bol']==1){
													echo "<span class='btn icon-only'><i class='halflings-icon check'></i></span></td>";
												} elseif($row['active_bol']==0){
													echo "<span class='btn icon-only'><i class='halflings-icon unchecked'></i></span>";
												}
										?></td>
										<td class="hidden-480"><?php
											if($row['hold_bol']==1){
													echo "<span class='btn icon-only'><i class='halflings-icon check'></i></span></td>";
												} elseif($row['active_bol']==0){
													echo "<span class='btn icon-only'><i class='halflings-icon unchecked'></i></span>";
												}
										?></td>
										
										</tr>
										<?php //$row["index"] the index here is a field name
											$total2= $total2 + 1;
											$sql6= "UPDATE tbl_account SET contact_ctr= '".$total2."' WHERE tbl_account.id='".$id."'";
											mysqli_query($conn,$sql6);
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
											<h4>Tasks</h4>
											</a>
										</div><!--heading close-->
										<div id="collapse_3" class="accordion-body collapse in">
							
								<div class="accordion-inner">
									<form action="delete_task.php" method="post">
							<div class="portlet-body">
							<div class="btn-group pull-left">
									<a class="btn btn red" href="add_task.php?id=<?=$id?>">
										<i class="icon-plus"></i> Add New 
									</a>
									</div>
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete5" class="btn button-next">
									</span>
								</div>
								
								
								
								
								
							
								<table class="table table-striped table-hover table-advance table-bordered" id="view_acc_task_table">
									<thead>
										<tr>
										<th style="width:25px; resize: none"><!--<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />--></th>
											<th>Priority</th>
											<th>Task Date</th>
											<th class="hidden-480">Task Type</th>
											<th>Task Status</th>
											<th class="hidden-480">Description</th>
											<th class="hidden-480">Owner</th>
										</tr>
									</thead>
									<tbody>
										<?php

										$sql2 = mysqli_query($conn, "SELECT tbl_account.account_name_str, 
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
										INNER JOIN tbl_account ON tbl_tasks.account_idr= tbl_account.id INNER JOIN tbl_owner ON tbl_tasks.owner_idr= tbl_owner.id WHERE tbl_account.id='".$id."'");//You don't need a ; like you do in SQL
											
										while($row=$sql2->fetch_assoc()){   //Creates a loop to loop through results
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
										<td class='center hidden-480'>" . $row['task_type_idr'] . "</td>
										<td class='center'>" . $row['task_status_idr'] . "</td>
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
										?>
									</tbody>
								</table>
							</div>
											</form>
											</div><!--portletclose-->
											</div><!--end of accordion-inner-->
										</div>
									</div>
										<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4">
											<h4>Activities</h4>
											</a>
										</div>
										<div id="collapse_4" class="accordion-body collapse in">
							
								<div class="accordion-inner">
									<form action="delete_activity.php" method="post">
							<div class="portlet-body">
							<div class="btn-group pull-left">
									<a class="btn btn red" href="add_activity.php?id=<?=$id?>">
										<i class="icon-plus"></i> Add New 
									</a>
									</div>
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete6" class="btn button-next">
									</span>
								</div>
								
								
								
								
								
							
								<table class="table table-striped table-hover table-advance table-bordered" id="view_acc_act_table">
									<thead>
										<tr>
										<th style="width:25px; resize: none"><!--<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />--></th>
											<th>Activity Date</th>
											<th>Activity Type</th>
											<th>Description</th>
										
										
										</tr>
									</thead>
									<tbody>
										<?php 

										$sql3 = mysqli_query($conn, "SELECT * FROM tbl_activity WHERE account_id='".$id."'");//You don't need a ; like you do in SQL
										while($row=$sql3->fetch_assoc()){   //Creates a loop to loop through results
										echo "<tr class='odd gradeX'>
										<td><input type='checkbox' name='accheck[]' class='checkboxes' value='".$row['id']."' /></td>";
										echo "
										<td class='center'>" . $row['adate_dat'] . "</td>
										<td class='center'>" . $row['atype_idr'] . "</td>
										<td class='center'>";
											if (empty($row['adescription_lng'])){
												echo "-";
											}
											else{
											 echo ($row['adescription_lng'] );	
											}
											
										echo "</td>
										</tr>";  //$row['index'] the index here is a field name
										}
										?>
									</tbody>
								</table>
							</div>
											</form>
											</div><!--portletclose-->
											</div><!--end of accordion-inner-->
										</div>			<!--acc group-->
										
														
																		
																						
							<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_5">
											<h4>Opportunities</h4>
											</a>
										</div><!--heading close-->
										<div id="collapse_5" class="accordion-body collapse in">
							
								<div class="accordion-inner">
									<form action="delete_opportunity.php" method="post">
							<div class="portlet-body">
								<div class="btn-group pull-left">
									<a class="btn btn red" href="add_opportunity2.php?id=<?=$id?>">
										<i class="icon-plus"></i> Add New 
									</a>
									</div>
						
								<div class="clearfix">
									
									
									<span class="btn-group pull-right">
									<input type="submit" value="Delete" name="delete3" class="btn button-next">
									</span>
								</div>
								
								
								
								
								
							
								<table class="table table-striped table-hover table-bordered" id="view_acc_opp_table">
									<thead>
										<tr>
											<th style="width:25px; resize: none"> <!--<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />--></th>
											<th>Close Date</th>
											<th>Opportunity Name</th>
											<th class="hidden-480">Forecast</th>
											<th>Status</th>
											<th>Total Value</th>
											<th class="hidden-480">Probability</th>
										
										</tr>
									</thead>
									<tbody>
										 <?php 

											$sql4 = mysqli_query($conn, "SELECT tbl_account.account_name_str, tbl_account.id as account_id , tbl_opportunities.id as opportunity_id,close_date_dat, opportunity_name_str, account_idr, forecast_idr, status_idr, total_value, tbl_opportunities.source_idr as source, probability_idr FROM tbl_opportunities INNER JOIN tbl_account ON tbl_opportunities.account_idr= tbl_account.id WHERE tbl_account.id='".$id."'"); //You don't need a ; like you do in SQL
									   		
									   		$total=0;
									   		$total1=0;
									  		$total3=0;
									   
											while($row = $sql4->fetch_assoc()){   ?>
											<tr class="odd gradeX">
											<td><input type="checkbox" name="ocheck[]" value="<?=$row["opportunity_id"]?>"/></td>
											<td><?=$row['close_date_dat']?></td>
											<td><a class="popovers" data-trigger="hover" data-placement="top" data-content="Edit this opportunity" href="view_opportunity.php?id=<?=$row['opportunity_id']?>"> <?=$row['opportunity_name_str']?></a></td>
											<td class="hidden-480 center"> <?=$row['forecast_idr']?></td>
											<td class="center"> <?=$row['status_idr']?></td>
											<td class="center">
											<?php
												if (empty($row['total_value'])){
												echo "-";
											}
											else{
											 echo "₱ ". ($row['total_value'] );	
											}
											
											?> </td>
											<td class="hidden-480 center"> <?=$row['probability_idr']?> %</td>
											</tr> <?php
												if($row["status_idr"]=="Won"){
												$total= $row["total_value"] + $total;//$row['index'] the index here is a field name
												$sql0 = "UPDATE tbl_account SET total_sales= '".$total."' WHERE tbl_account.id='".$id."'";
												mysqli_query($conn,$sql0);
												}
												if($row["status_idr"]=="Lost"){
													$total1= $row["total_value"] + $total1;
													$sql5= "UPDATE tbl_account SET total_sales_lost= '".$total1."' WHERE tbl_account.id='".$id."'";
													mysqli_query($conn,$sql5);
												}
												$total3= $total3 + 1;
												$sql7= "UPDATE tbl_account SET opportunity_started_ctr= '".$total3."' WHERE tbl_account.id='".$id."'";
												mysqli_query($conn,$sql7);
											}
									   mysqli_close($conn);
											?>
									
									</tbody>
								</table>
							</div>
											</form>
											</div><!--portletclose-->
											</div><!--end of accordion-inner-->
										</div>
									</div>																				
																														
																																						
								
								
								
								
								
								
								
								
								
								
								
								</div>
							</div>
							
							
							
				
						</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
					
							
						</div>  
                                   
                                   
                                    <!--/row-->           
   
                           
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
	
<!--<script>
	function mycols(){
		var z1 = document.getElementById("myswitch");
		if (z1.checked == true){
			document.getElementById("arjan").innerHTML = '<div class="clearfix" id="arjan"><div class="btn-group" ><a href="delete_contact.php"><button class="btn red"><i class="icon-trash"></i> Delete </button></a></div></div>';
			

		}
		else {
			document.getElementById("arjan").innerHTML = '<div class="clearfix" id="arjan"><div class="btn-group" ><a href="add_contact.php"><button class="btn red"><i class="icon-plus"></i> Add New </button></a></div></div>';


		}


		}
</script>
<script>
	
	function abc(){
	var checked = false;
	var elements = document.getElementsByName("ccheck[]");
	for(var i=0; i < elements.length; i++){
		if(elements[i].checked == true) {
			document.getElementById("deletechk").style.visibility = "visible";
			//for (var j=0; i < elements.length; j++){
			if (elements[i].checked == false) {
				document.getElementById("deletechk").style.visibility = "hidden";
			}
			//}
		}
		
	}
	if (elements[i].checked == false) {
		   document.getElementById("deletechk").style.visibility = "hidden";
	}
	document.getElementById("deletechk").style.visibility = "hidden";
		
}
	-->
	
</script>
				<script>
	$(document).ready(function() {
    $('#view_acc_opp_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>
				<script>
	$(document).ready(function() {
    $('#view_acc_act_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>
			<script>
	$(document).ready(function() {
    $('#view_acc_con_table').DataTable( {
        "pagingType": "full_numbers"
    } );
	} );
	</script>
		<script>
	$(document).ready(function() {
    $('#view_acc_task_table').DataTable( {
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
                                   <script>
									   $(document).ready(function(){
										 $('.btn-delete').click(function(){
										var id1 = $('#id1').val();
									swal({
										  title: "Are you sure?",
										  text: "Once deleted, you will not be able to recover this account!",
										  icon: "warning",
										  buttons: true,
										  dangerMode: true,
										})
										.then((willDelete) => {
										  if (willDelete) {
											window.location.href = 'delete_account.php?id=' + id1; 
										  } else {
											window.location.href = 'view_account.php?id=' + id1;
										  }
										});
																				 });

																			   });
										</script>

	
</body>
<!-- END BODY -->
</html>
