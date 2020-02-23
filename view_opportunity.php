<?php 
	session_start();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	echo '<input type="hidden" id="id1" value="'.$id.'"/>';
	include "connect.php";
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
						<li ><a href="reports.php">Reports</a></li>
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
							<i class="icon-trophy"></i> Opportunities
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="opportunities.php">Opportunities</a>
							<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Viewing Opportunity</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				
							<?php 
								$sql = mysqli_query($conn, "SELECT account_idr, opportunity_name_str, close_date_dat, status_idr, total_value, next_step_str, forecast_idr, probability_idr, competitor_str, repeat_order_bol, source_idr, loss_reason_str, campaign_idr, report_lng, description_lng, quantity_lng, product_lng, uprice_lng FROM tbl_opportunities WHERE tbl_opportunities.id='$id'"); //You don't need a ; like you do in SQL
								$row= $sql->fetch_assoc();
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
                                    <h3 class="form-section">View Opportunity Info</h3>
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" for="firstName">Opportunity Name:</label>
                                             <div class="controls">
												 <span class="text"><b><?=$row["opportunity_name_str"]?></b></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" for="lastName">Source:</label>
                                             <div class="controls">
                                                <span class="text"><b><?=$row["source_idr"]?></span>
													</b></div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Close Date:</label>
                                             <div class="controls">
                                                <span class="text"><b><?=$row["close_date_dat"]?></span> 
													</b></div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Loss Reason:</label>
                                             <div class="controls">
                                                <span class="text bold">
											 <?php
												if(empty($row['loss_reason_str'])){
													echo"-";
												}
												else {
													echo ($row['loss_reason_str']);
												}
												?>	 
                                            </span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->        
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Status:</label>
                                             <div class="controls">
                                                <span class="text bold"><?=$row["status_idr"]?></span>
                                             </div>
                                          </div>
                                       </div>
                                      
                                    </div>
                                    <!--/row--> 
                                         <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Next Step:</label>
                                             <div class="controls">
                                                <span class="text bold">
												  <?php
												if(empty($row['next_step_str'])){
													echo"-";
												}
												else {
													echo ($row['next_step_str']);
												}
												?>
                                            </span>
                                             </div>
                                          </div>
                                       </div>
                                       
                                    </div>
                                    <!--/row--> 
                                                                 
                                         <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Forecast:</label>
                                             <div class="controls">
                                                <span class="text bold"><?=$row["forecast_idr"]?> </span>
                                             </div>
                                          </div>
                                       </div>
                                    
                                    </div>
                                    <!--/row-->   
                                                                                            
                                          <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Probability:</label>
                                             <div class="controls">
                                                <span class="text bold"><?=$row["probability_idr"]?></span>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->   
                                        <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Competitor:</label>
                                             <div class="controls">
                                                <span class="text bold">
                                                	 <?php
												if(empty($row['competitor_str'])){
													echo"-";
												}
												else {
													echo ($row['competitor_str']);
												}
												?>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                      
                                     
                                    </div>
                                    <!--/row-->  
                                         <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Repeat Order:</label>
                                             <div class="controls">
                                                <span class="text bold"><?php 				  if($row["repeat_order_bol"]=1){
																		echo "Yes";}
																		else{
																			echo "No";
																		}
																	 ?></span>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->
                                    <div style="padding-bottom:  3%"></div>
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Campaign:</label>
                                             <div class="controls">
                                                <span class="text bold">
                                                <?php 

													$sql = mysqli_query($conn,"SELECT * FROM tbl_campaign WHERE id='".$row['campaign_idr']."'");
													while($row1 = $sql->fetch_assoc()){
													 if($row1['campaign_name_str']!=NULL){
														 echo $row1['campaign_name_str'];
													 } else {
														 echo "none";
													 }
													}
													mysqli_close($conn);
													?>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->
                                              <div style="padding-bottom:  3%"></div>
                                             <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Win/Loss Report:</label>
                                             <div class="controls">
                                                <span class="text bold">
											 <?php
												if(empty($row['report_lng'])){
													echo"-";
												}
												else {
													echo ($row['report_lng']);
												}
												?>	 
                                            </span>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->    
                                        <div style="padding-bottom:  3%"></div>                                                                                  <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Description:</label>
                                             <div class="controls">
                                                <span class="text bold">
                                                	 <?php
												if(empty($row['description_lng'])){
													echo"-";
												}
												else {
													echo ($row['description_lng']);
												}
												?>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <!--/row-->  
                                                                                                                                                       
                                  
                                    <h3 class="form-section">Opportunity Lines</h3>   
                                      
                   	<div class="portlet-body">
                   	
								<table class="table table-striped table-hover table-bordered" id="myTable">
									<thead >
										<tr>			
											<th>Quantity</th>
											<th>Product</th>
											<th>Unit Price</th>							
										</tr>
									</thead>
									<tbody>
									<?php 
										$quantity = explode('||', $row["quantity_lng"]);
										$product = explode('||',$row["product_lng"]);
										$uprice = explode('||',$row["uprice_lng"]);
										$ctr1 = count($quantity);
										for($x=0; $x<$ctr1 - 1; $x++){ ?>
											<tr class="odd gradeX">
											<td><?=$quantity[$x]?></td>
											<td><?=$product[$x]?></td>	
											<td><?=$uprice[$x]?></td>
										</tr>
								<?php } ?>
									</tbody>
								</table>
							
							</div>                                                                                                                                                 
                                                                                                                    
                                       
                                  
                                   
                                   
                                   
                                    <!--/row-->           
                                   
                                    <div class="form-actions">
                                       <a href="edit_opportunity.php?id=<?=$id?>"><button type="submit" class="btn red"><i class="icon-pencil"></i> Edit</button></a>
                                       <a><button type="button" class="btn btn-delete"><i class="icon-trash"></i> Delete</button></a>
                                       <a href="opportunities.php"><button type="button" class="btn">Back</button></a>
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
										  text: "Once deleted, you will not be able to recover this opportunity!",
										  icon: "warning",
										  buttons: true,
										  dangerMode: true,
										})
										.then((willDelete) => {
										  if (willDelete) {
											window.location.href = 'delete_opportunity.php?id=' + id1; 
										  } else {
											window.location.href = 'view_opportunity.php?id=' + id1;
										  }
										});
																				 });

																			   });
										</script>
</body>
<!-- END BODY -->
</html>