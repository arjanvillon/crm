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
	<title>1Devs Inc. | Reports</title>
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
		<link href="assets/glyphicons/css/glyphicons.css" rel="stylesheet" />
	<link href="assets/glyphicons_halflings/css/halflings.css" rel="stylesheet" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="shortcut icon" href="assets/img/LOGO.png" />
	<link rel="stylesheet" href="scroll.css" />
	
	<style>
		a{
			color:black;
			font-weight: 600;
		}
		a:hover {
			color: red;
		}
		@media print{
			a{display: none !important;}
			select{display: none !important;}
			i{display: none !important;}
			.page-title{display: none !important;}
			.footer{display: none !important;}
		}
		
			@media only screen and (min-width: 1281px) {
														.screen{
														margin-left: 20px;
														text-align: center;
														align-content: center;
														}
	
		
	</style>
	
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
						<style>.username::first-letter{text-transform:uppercase;}</style><span class="username" style="display:inline-block" ><?=$_SESSION["uname"]?></span>
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
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="accounts.php">Accounts</a></li>
						<li ><a href="contacts.php">Contacts</a></li>
						<li ><a href="opportunities.php">Opportunities</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
						<li class="selected active"><a href="reportss.php">Reports</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title">Marketing</span>
					
					</a>
					<ul class="sub">
						<li><a href="campaign.php">Campaign</a></li>
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
							<i class="icon-paste"></i> Reports
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Reports</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
			            <div class="row-fluid">
               <div class="span12">
                  <div class="tabbable tabbable-custom boxless">
                     <ul class="nav nav-tabs">
                        <li ><a href="#opp_won_tab" data-toggle="tab" onClick="opp_won()" id="opp_won">Opportunity Report</a></li>
                        <li><a class="advance_form_with_chosen_element" href="#task_tab" id="task_r" data-toggle="tab">Task Report</a></li>
                        <li class="active"><a class="advance_form_with_chosen_element" href="#campaign_tab" onClick="report_campaign()" id="report_campaign" data-toggle="tab">Campaign Report</a></li>
                     <!--    <li><a href="#tab_3" data-toggle="tab">2 Columns View Only</a></li>
                       <li><a class="advance_form_with_chosen_element" href="#tab_4" data-toggle="tab">Task Completed</a></li>
                        <li><a class="advance_form_with_chosen_element" href="#tab_5" data-toggle="tab">vjhfdhb</a></li>-->
               
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="opp_won_tab">
                  			
                      		<div class="portlet-body">
								<div class="row-fluid">
									<div class="span12">
										<!--BEGIN TABS-->
										<div class="tabbable tabbable-custom">
											<ul class="nav nav-tabs">
											<?php if(isset($_GET["active"])){
														$active = $_GET["active"];
														if($active!=1){ ?>
															<li class="active" id="tim1"><a href="#quarter_opp_tab" data-toggle="tab" >Quarters</a></li>
															<li id="tim2"><a href="#months_opp_tab" data-toggle="tab">Months</a></li>
															<li style="padding-left: 10px;">
														<?php
														}
														elseif($active=1){ ?>
															<li  id="tim1"><a href="#quarter_opp_tab" data-toggle="tab" >Quarters</a></li>
															<li class="active" id="tim2"><a href="#months_opp_tab" data-toggle="tab">Months</a></li>
															<li style="padding-left: 10px;">
														<?php }}
														else{ ?>
															<li class="active" id="tim1"><a href="#quarter_opp_tab" data-toggle="tab" >Quarters</a></li>
															<li id="tim2"><a href="#months_opp_tab" data-toggle="tab">Months</a></li>
															<li style="padding-left: 10px;">
														<?php }
													 ?>
											<!--	<li class="active" id="tim1"><a href="#nature" data-toggle="tab" >Quarters</a></li>
												<li id="tim2"><a href="#months_opp_tab" data-toggle="tab">Months</a></li>
												<li style="padding-left: 10px;">-->
													
														  <div class="controls">
															 <select id="selyear"  onChange="selectyear()" class="span12 chosen" data-placeholder="Choose a Category" tabindex="1">
																<option selected value="" disabled>Select Year</option>
																<option value="2018">2018</option>
																<option value="2019">2019</option>
																<option value="2020" >2020 </option>
																<option value="2021" >2021 </option>
																<option value="2022" >2022 </option>
																<option value="2023" >2023 </option>
																<option value="2024" >2024 </option>
																<option value="2025" >2025 </option>
																<option value="2026" >2026 </option>
																<option value="2027" >2027 </option>
																<option value="2028" >2028 </option>
																<option value="2029" >2029 </option>
																<option value="2030" >2030 </option>
																<option value="2031" >2031 </option>
																<option value="2032" >2032 </option>
																<option value="2033" >2033 </option>
																<option value="2034" >2034 </option>
																<option value="2035" >2035</option>
																<option value="2036" >2036 </option>
																<option value="2037" >2037 </option>
																<option value="2038" >2038 </option>
																<option value="2039" >2039 </option>
																<option value="2040" >2040 </option>
																<option value="2041" >2041 </option>
																<option value="2042" >2042 </option>
																<option value="2043" >2043 </option>
																<option value="2044" >2044 </option>
																<option value="2045" >2045 </option>
																<option value="2046" >2046 </option>
																<option value="2047" >2047 </option>
																<option value="2048" >2048 </option>
																<option value="2049" >2049 </option>
																<option value="2050" >2050 </option>
															 </select>
															 
														  </div>
														  
													
												       
												</li>
												<li style="padding-left: 10px;">
													<div class="controls" id="quarterss">
													<?php if(isset($_GET["active"])){
															$active1 = $_GET["active"];
															if($active1!=1){ ?>
														<select id='qselect' onChange='selectquart()' class='span12 chosen m-wrap' data-placeholder='Choose a Category' tabindex='1'><option value='' selected='selected' disabled>Select Quarter</option><option value='First Quarter'>First Quarter</option><option value='Second Quarter'>Second Quarter</option><option value='Third Quarter'>Third Quarter</option><option value='Fourth Quarter'>Fourth Quarter</option></select>
														<?php } elseif($active1=1){ ?>
																<select id='mselect' onChange='selectmonth()' class'span12 chosen m-wrap' data-placeholder='Choose a Catergory' tabindex='1'><option value='' selected='selected' disabled>Select Month</option><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select>
															<?php }} else { ?>
															<select id='qselect' onChange='selectquart()' class='span12 chosen m-wrap' data-placeholder='Choose a Category' tabindex='1'><option value='' selected='selected' disabled>Select Quarter</option><option value='First Quarter'>First Quarter</option><option value='Second Quarter'>Second Quarter</option><option value='Third Quarter'>Third Quarter</option><option value='Fourth Quarter'>Fourth Quarter</option></select>
	
																<?php	} ?>
											</div>
												
												
												<!--<li><a href="#tab_1_3" data-toggle="tab">Section 3</a></li>-->
											</ul>
											
											<div class="tab-content">
											
												<div class="tab-pane active" id="quarter_opp_tab">
													
											<div id="reports_campaigncampaign" style="width: 100%; height: 360px;">
												<div class="screen"><center>
												<h2>&nbsp;You haven't selected a specific year and quarter</h2>
														<h3>&nbsp;Please select a year and a quarter</h3></center></div>
												
												</div> 
												
												</div>
												<div class="tab-pane " id="months_opp_tab">
													
										<div id="reports_campaigncampaign" style="width: 100%; height: 360px;">
													<div class="screen"><center><h2>&nbsp;You haven't selected a specific year and month</h2><h3>&nbsp;Please select a year and a month</h3></center></div>
													
													</div> 
													
													
												</div>
											</div>
										</div>
										<!--END TABS-->
									</div>
								
								</div>
						
						
						
						
							</div>
                      			
                      			
                      			
        					              
                      
                      
                       
                        </div>
                        <div class="tab-pane " id="task_tab">
                       
                 	
                      	   		<div class="portlet-body">
								<div class="row-fluid">
									<div class="span12">
										<!--BEGIN TABS-->
										<div class="tabbable tabbable-custom">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#quarters_task_tab" data-toggle="tab">Quarters</a></li>
												<li><a href="#months_task_tab" data-toggle="tab">Months</a></li>
												<li style="padding-left: 10px;">
														 
														 
														  <div class="controls">
															 <select class="span12 m-wrap" data-placeholder="Choose a Category" tabindex="1">
																
																<option selected value=""></option>
																<option value="2018">2018</option>
																<option value="2019">2019</option>
																<option value="2020" >2020 </option>
																<option value="2021" >2021 </option>
																<option value="2022" >2022 </option>
																<option value="2023" >2023 </option>
																<option value="2024" >2024 </option>
																<option value="2025" >2025 </option>
																<option value="2026" >2026 </option>
																<option value="2027" >2027 </option>
																<option value="2028" >2028 </option>
																<option value="2029" >2029 </option>
																<option value="2030" >2030 </option>
																<option value="2031" >2031 </option>
																<option value="2032" >2032 </option>
																<option value="2033" >2033 </option>
																<option value="2034" >2034 </option>
																<option value="2035" >2035</option>
																<option value="2036" >2036 </option>
																<option value="2037" >2037 </option>
																<option value="2038" >2038 </option>
																<option value="2039" >2039 </option>
																<option value="2040" >2040 </option>
																<option value="2041" >2041 </option>
																<option value="2042" >2042 </option>
																<option value="2043" >2043 </option>
																<option value="2044" >2044 </option>
																<option value="2045" >2045 </option>
																<option value="2046" >2046 </option>
																<option value="2047" >2047 </option>
																<option value="2048" >2048 </option>
																<option value="2049" >2049 </option>
																<option value="2050" >2050 </option>
															 </select>
														  </div>
													
												       
												</li>
												<!--<li><a href="#tab_1_3" data-toggle="tab">Section 3</a></li>-->
											</ul>
										
										</div>
										<!--END TABS-->
									</div>
								
								</div>
						
						
						
						
							</div>
                      			
                       
                       
                       
                       
                       
                       
                       
                        </div>
                   
               
                     
                     
                     
                     </div>
                  </div>
               </div>
            </div>
			
			
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
	<script type="text/javascript" src="google.js"></script>
  
   <script>
	var a = document.getElementById("tim1");
	var b = document.getElementById("tim2");
	a.onclick = function(){
		document.getElementById("quarterss").innerHTML = "<select id='qselect' onChange='selectquart()' class='span12 chosen m-wrap' data-placeholder='Choose a Category' tabindex='1'><option value='' disabled selected='selected'>Select quarter</option><option value='First Quarter'>First Quarter</option><option value='Second Quarter'>Second Quarter</option><option value='Third Quarter'>Third Quarter</option><option value='Fourth Quarter'>Fourth Quarter</option></select>";
				document.getElementById("quarter_opp_tab").innerHTML = "<center><h2>You haven't selected a specific year and quarter</h2><h3>Please select a year and a quarter</h3></center>";
	}
	b.onclick = function(){
		document.getElementById("quarterss").innerHTML = "<select id='mselect' onChange='selectmonth()' class'span12 chosen m-wrap' data-placeholder='Choose a Catergory' tabindex='1'><option value='' disabled selected='selected'>Select Month</option><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select>";
		document.getElementById("months_opp_tab").innerHTML = "<center><h2>You haven't selected a specific year and month</h2><h3>Please select a year and a month</h3></center>";

	}
	

	function selectquart(){
		 var x = document.getElementById("qselect").value;
		 var y = document.getElementById("selyear").value;
			if (x == "First Quarter"){
				var startq = "-01-01";
				var finishq = "-03-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq;	
			}
			else if (x == "Second Quarter"){
				var startq = "-04-01";
				var finishq = "-06-30";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq;	
			}
		else if (x == "Third Quarter"){
				var startq = "-07-01";
				var finishq = "-09-30";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq;	
			}
		else if (x == "Fourth Quarter"){
				var startq = "-10-01";
				var finishq = "-12-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq;	
			}

	}
	
	function selectmonth(){
		 var x = document.getElementById("mselect").value;
		 var y = document.getElementById("selyear").value;
			if (x == "January"){
				var startq = "-01-01";
				var finishq = "-01-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq + "&active=1";	
			}
			else if (x == "February"){
				var startq = "-02-01";
				var finishq = "-02-28";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "March"){
				var startq = "-03-01";
				var finishq = "-03-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "April"){
				var startq = "-04-01";
				var finishq = "-04-30";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "May"){
				var startq = "-05-01";
				var finishq = "-05-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "June"){
				var startq = "-06-01";
				var finishq = "-06-30";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "July"){
				var startq = "-07-01";
				var finishq = "-07-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "August"){
				var startq = "-08-01";
				var finishq = "-08-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "September"){
				var startq = "-09-01";
				var finishq = "-09-30";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "October"){
				var startq = "-10-01";
				var finishq = "-10-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "November"){
				var startq = "-11-01";
				var finishq = "-11-30";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
			else if (x == "December"){
				var startq = "-12-01";
				var finishq = "-12-31";
				window.location.href ="reportss_campaign.php?start=" + y + startq + "&finish=" + y + finishq+ "&active=1";	
			}
		
			
	}
	
	
</script>
   
  
  	<?php 
			if(isset($_GET["start"])){
				$start= $_GET["start"];
				$finish= $_GET["finish"];
									}
			 ?>
 <script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAxisTickColors);

	 
function drawAxisTickColors() {
      var data = google.visualization.arrayToDataTable([
		['Campaigns', 'Not Started', 'Ongoing', 'Completed'],
       <?php
		$sql2 = mysqli_query($conn,"SELECT * FROM tbl_campaign WHERE (start_date_dat BETWEEN '".$start."' AND '".$finish."') AND (end_date_dat BETWEEN '".$start."' AND '".$finish."')");
		$ongoing=0;
		$not_started=0;
		$completed=0;
		while($row2=$sql2->fetch_assoc()){
			if ( date("Y-m-d") >= $row2['start_date_dat'] && date("Y-m-d") < $row2['end_date_dat'] ){
			
				$ongoing++;
			}
			elseif ( date("Y-m-d") < $row2['start_date_dat']){
		
				$not_started++;
			
			}
			elseif (date("Y-m-d") >= $row2['end_date_dat']){
				$completed++;	
			}
			
		}					
			echo "['" .$row2["campaign_name_str"]. "'," .$not_started. "," .$ongoing. "," .$completed. "],";
		
		mysqli_close($conn);
				?>
      ]);

	
      var options = {
        title: 'Campaign Report <?php echo " from " . $start ." to ". $finish;?>',
		 colors: ['blue', 'red', 'green'],
        chartArea: {fill: 'red', width: '50%'},
        hAxis: {
          title: 'Status',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d'
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        },
        vAxis: {
          title: '',
          textStyle: {
            fontSize: 14,
            bold: true,
			  fill: 'red',
            color: '#848484'
          },
          titleTextStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          }
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('reports_campaigncampaign'));
      chart.draw(data, options);
    }
	 		$(window).resize(function(){
				drawAxisTickColors();
	}); 
	 
	 
</script>
	 
<script>
var oppa = document.getElementById("opp_won");
var oppo = document.getElementById("task_r");
	oppo.addEventListener('click', function(){
		document.location.href = "reportss_task_added.php";
	});
	oppa.addEventListener('click', function(){
		document.location.href = "reportss.php";
	});

	
	
	
</script>
	  
			
	<script>
	$(document).ready(function() {
    $('#campaigns_table').DataTable( {
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


