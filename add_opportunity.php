<?php
include "connect.php";
session_start(); ?><?php
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
							<i class="icon-trophy"></i>  Opportunities
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="opportunities.php">Opportunities</a>&nbsp;&nbsp;</li>
							<i class="icon-angle-right"></i>
							<li>&nbsp;&nbsp;<a href="#">New Opportunity</a></li>
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
                           <i class="icon-reorder"></i> Manage Opportunity 
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>

                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="save_opportunity.php" id="opportunity_validate" method="post" class="form-horizontal">
                      			<div class="row-fluid">
                      			    <h3 class="form-section">Details</h3>
            	 <div class="control-group">
                        
							   <label class="control-label">Account Name<span title="Required" class="required">*</span></label> 
                              <div class="controls">
                                 <select required class="span6 chosen" data-placeholder="Search for an Account" tabindex="1" name="aname">
                                    
                                    <?php 
									$sql = mysqli_query($conn,"SELECT id, account_name_str FROM tbl_account");
									while ($row = $sql->fetch_assoc()){
									 	$id= $row['id'];
									  $name = $row['account_name_str']; 
									  echo '<option value="'.$id.'" selected="selected">'.$name.'</option>';
									}
									?> 
                                 </select>
                              </div>
                           </div>
					 
					  </div>
 
                              <!--Di ko pa magets concept nung search for an account dito kaya di ko muna ilalagay-->
                         
                                   <div class="control-group">
                              <label class="control-label" for="oname" title="Required">Opportunity Name<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                 <input name="oname" id="oname" minlength="5" maxlength="30" spellcheck="true" type="text" class="span6 m-wrap" minlength="4" maxlength="20" required>
                              </div>
                           </div>
                                
                              <!--change width -->
                                     <div class="control-group">
                              				<label class="control-label" for="date" title="Required">Close Date<span class="required" title="Required">*</span></label>
                            			  <div class="controls">
                                   		
                                    		<div class="row-fluid">
											 <div class="span12">
												<input class="span6" type="date" id="date" name="date" max="2050-12-31" required/>
										 	</div>
                                    	   </div>                             
                            			  </div>
                             		  </div>
                                         
                              <div class="control-group">
                              <label class="control-label" title="Required">Status<span class="required" title="Required">*</span></label>
                              <div class="controls">
                               <select name="ostatus" class="span6 m-wrap chosen" data-placeholder="Choose Status" tabindex="1" required>
								   <option value="New Lead" selected="selected">New Lead</option>
								   <option value="Qualified">Qualified</option>
								   <option value="Waiting">Waiting</option>
								   <option value="Meeting">Meeting</option>
								   <option value="Quoted">Quoted</option>
								   <option value="Waiting for PO">Waiting for PO</option>
								   <option value="Won">Won</option>
								   <option value="Lost">Lost</option>
								   <option value="No Opportunity">No Opportunity</option>
                               </select>
                              </div>
                           </div>
                   
                           <div class="control-group">
                              <label class="control-label" title="Optional" for="next_step">Next Step</label>
                              <div class="controls">
                                 <input spellcheck="true" maxlength="20" name="next_step" id="next_step"  type="text" class="span6 m-wrap">
                              </div>
                           </div>
                           
                             <div class="control-group">
                              <label class="control-label" title="Required">Forecast<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                <select name="forecast" class="chosen span6 m-wrap" data-placeholder="Choose Forecast" tabindex="1" required>
								   <option value="Not Forecast">Not Forecast</option>
								   <option value="Forecast">Forecast</option>
								   <option value="Upside">Upside</option>
								   <option value="Lost/Dead">Lost/Dead</option>
								   <option value="Closed/Won" selected="selected">Closed/Won</option>
								   <option value="Downgrade/Unsubscribe">Downgrade/Unsubscribe</option>
                               </select>
                              </div>
                           </div>
                           
                           <div class="control-group">
                              <label class="control-label" title="Required">Probability<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                <select name="probability" class="chosen span6 m-wrap" data-placeholder="Choose Probability" tabindex="1">    
								   <option value="0">0</option>
								   <option value="10">10</option>
								   <option value="25" >25</option>
								   <option value="50" selected="selected">50</option>
								   <option value="75">75</option>
								   <option value="100">100</option>
                               </select>
                              </div>
                           </div>
                           

                                  
                                     <div class="control-group">
                              <label class="control-label" for="competitor" title="Optional">Competitor</label>
                              <div class="controls">
                                 <input spellcheck="true" id="competitor" maxlength="20" name="competitor" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                     
                                        
                                                  
                                       <div class="control-group">
                              <label class="control-label" for="rep" title="Do you want your order to be repeated?" style="cursor: help">Repeat Order</label>
                              <div class="controls">
                                 <div class="danger-toggle-button">
                                    <input name="decision" type="checkbox" class="toggle" checked="checked" />
                                 </div>
                    
                                 </div>
                              </div>
                                   
                                   
                                   
                                    <div class="control-group">
                              <label class="control-label" title="Required">Source<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                <select name="osource" class="chosen span6 m-wrap" data-placeholder="Choose Source" tabindex="1" required>
								   <option value="Advertisement" selected="selected">Advertisement</option>
								   <option value="Email">Email</option>
								   <option value="Mailshot">Mailshot</option>
								   <option value="Pay Per Click">Pay Per Click</option>
								   <option value="Press">Press</option>
								   <option value="Referral">Referral</option>
								   <option value="Social">Social</option>
								   <option value="Telephone">Telephone</option>
								   <option value="Web Search">Web Search</option>
								   <option value="Web site">Web site</option>
								   <option value="Word of Mouth">Word of Mouth</option>
                               </select>
                              </div>
                           </div>
                                  
                                   <div class="control-group">
                              <label class="control-label" for="lr" title="Optional">Loss Reason</label>
                              <div class="controls">
                                 <input spellcheck="true" id="lr" maxlength="30" name="loss_reason" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                                 
                        
                             
                               <div class="control-group">
                              <label class="control-label">Campaign</label>
                              <div class="controls">
                                <select name="campaign" class="chosen span6 m-wrap" data-placeholder="Choose Campaign" tabindex="1">
                             		<option value="" selected="selected"></option>
                          		    <?php 
									$sql2 = mysqli_query($conn,"SELECT id, campaign_name_str FROM tbl_campaign");
									while ($row = $sql2->fetch_assoc()){
									 	$id2= $row['id'];
									  $name2 = $row['campaign_name_str']; 
									  echo '<option value="'.$id2.'" >'.$name2.'</option>';
									}
									mysqli_close($conn);
									?> 
                              </select>
                              </div>
                           </div>
                           
                          
                                <div class="control-group">
							   <label class="control-label" for="wl" title="Optional">Win/Loss Report</label>
                              <div class="controls">
                                 <textarea spellcheck="true" maxlength="300" id="wl" name="report" class="col-lg-7 m-wrap span6"></textarea>
                              </div>
                           </div>
                           
                           
                                <div class="control-group">
							   <label class="control-label" for="desc" title="Optional">Description</label>
                              <div class="controls">
                                 <textarea spellcheck="true" id="desc" maxlength="300" name="description" class="col-lg-7 m-wrap span6"></textarea>
                              </div>
                           </div>
                         
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
										<tr class="odd gradeX">
												
										</tr>
							
									</tbody>
								</table>
									<button type="button" class="btn red" onclick="mahtable()">Add Opportunity Line <i class="icon-plus-sign"></i></button>
							</div>                                                                                                                                                 
                                                                                                                    
                                       
								 
                                            
                                                  
                                                   
                                       
                                      <div class="form-actions clearfix">
                                <!--MAGLALAGAY BA AKO NG CANCEL BUTTON?-->
                                 <a href="opportunities.php" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Cancel 
                                 </a>
                                 
                                 <input type="submit" value="Submit" name="save3" class="btn red button-next "><i class="m-icon-swapright m-icon-white"></i>
                              </div>                                         
 
                                 </div><!--close for all-->
                              </div><!--close for portlet body red-->
                            						
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
	$("#opportunity_validate").validate();
});
</script>    
 <script>
	var ctr=0;
	function mahtable() {
    var table = document.getElementById("myTable");
	
	
    var row = table.insertRow(table.rows.length);
	
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	
	
    cell1.innerHTML = '<input type="number" value="" class="span12" name="quantity[' + ctr + ']"/>';
    cell2.innerHTML = '<select  name="product[' + ctr + ']" class="span12 m-wrap chosen" data-placeholder="Select Product Type" tabindex="1" id="select_product_type1"> <option value="" ></option> <option selected="selected" value="Consultancy">Consultancy</option><option value="Delivery">Delivery</option><option value="Discount">Discount</option> <option value="Fee">Fee</option><option value="Other Product">Other Product</option><option value="Other Services">Other Services</option> <option value="Product">Product</option><option value="Services">Services</option> <option value="Subscription">Subscription</option> </select>          ';
	cell3.innerHTML = '<input type="number" value="" class="span12" name="uprice[' + ctr + ']"/>';
	
	return ctr += 1;
}
	 

</script>
	
	<script>
		jQuery(document).ready(function() { 			
			// initiate layout and plugins
			App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
	  <script>
	  
$(window).load(function(){
     $('.loader').fadeOut();
});
</script>
<!-- END BODY -->
</html>
